import { useState } from 'react';
import { FaSearch } from 'react-icons/fa';
import './Berita.css';

const Sidebar = ({ popularPosts }) => {
  const [searchTerm, setSearchTerm] = useState('');

  const handleSearch = (e) => {
    setSearchTerm(e.target.value);
  };

  return (
    <div className="sidebar">
      <div className="search-bar">
        <input
          type="text"
          placeholder="Search..."
          value={searchTerm}
          onChange={handleSearch}
        />
        <FaSearch />
      </div>
      <h3>Berita Populer</h3>
      <ul>
        {popularPosts.map((post) => (
          <li key={post.id}>
            <a href={`berita-desa/${post.slug}`}>{post.judul}</a>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Sidebar;