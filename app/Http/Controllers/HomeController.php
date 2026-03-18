<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\dietaries;
use App\Models\Food_product;
use App\Models\FoodReview;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $foods = Food_product::with('reviews')->take(3)->get();
        return view('home', compact('foods'));
    }


    public function menu(Request $request)

    {

        $foods = Food_product::with('reviews')->paginate(9);

        $query = Food_product::query();

        if ($request->has('category') && is_array($request->category)) {
            $query->whereIn('category_id', $request->category);
        }

        if ($request->has('dietary') && is_array($request->dietary)) {
            $query->whereIn('dietary_id', $request->dietary);
        }

        $foods = $query->with('reviews')->get();

        if ($request->sort) {
            switch ($request->sort) {
                case 'name':
                    $query->orderBy('title', 'asc');
                    break;
                case 'price-low':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-high':
                    $query->orderBy('price', 'desc');
                    break;
                case 'popular':
                    $query->withCount('reviews')->orderBy('reviews_count', 'desc');
                    break;
            }
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $foods = $query->paginate(9);
        $categories = categories::all();
        $dietary = dietaries::all();

        return view('menu_page', compact('foods', 'categories', 'dietary'));
    }

    public function reservations()
    {

        return view('reservations');
    }

    public function blogs()
    {

        return view('blogs');
    }

    public function blog_details()
    {

        return view('blog_details');
    }

    public function food_details($id, $slug)
    {

        $food = Food_product::findOrFail($id);

        $reviews = FoodReview::where('food_id', $id)->get();

        $averageRating = round($reviews->avg('rating'), 1);

        $totalReviews = $reviews->count();

        $related_food = Food_product::where('category_id', $food->category_id)
            ->whereNot('id', $food->id)
            ->take(3)
            ->get();

        return view('food_details', compact('food', 'related_food', 'reviews', 'averageRating', 'totalReviews'));
    }


    public function submitReview(Request $request, $id, $slug)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);

        FoodReview::create([
            'food_id' => $id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }



    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {

        return view('check_out');
    }

    public function confirm_order()
    {

        return view('confirm_order');
    }

    public function about()
    {

        return view('about');
    }
    public function gallery()
    {

        return view('gallery');
    }

    public function contact()
    {

        return view('contact');
    }

    public function register()
    {

        return view('register');
    }
}
