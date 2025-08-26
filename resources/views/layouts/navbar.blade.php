<!-- Search Bar -->
<form action="{{ route('search') }}" method="GET" class="search-form">
    <input type="text" name="q" placeholder="Search videos, music, movies, users, trends, news..." required>
    <button type="submit">🔍</button>
</form>

<style>
.search-form {
    display: flex;
    align-items: center;
    background: #f1f1f1;
    border-radius: 20px;
    padding: 5px 10px;
    width: 100%;
    max-width: 500px;
    margin: auto;
}
.search-form input {
    border: none;
    background: transparent;
    flex: 1;
    padding: 8px;
    outline: none;
}
.search-form button {
    background: none;
    border: none;
    font-size: 16px;
    cursor: pointer;
}
</style>
