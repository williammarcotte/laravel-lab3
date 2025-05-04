use Illuminate\Http\Request;

public function store(Request $request, $postId)
{
    $validated = $request->validate([
        'commenter_name' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);

    \App\Models\Comment::create([
        'post_id' => $postId,
        'commenter_name' => $validated['commenter_name'],
        'comment' => $validated['comment'],
    ]);

    return redirect()->route('posts.show', $postId)->with('success', 'Comment added!');
}
