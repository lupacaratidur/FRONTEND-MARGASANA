import kades from '../assets/kepala-desa.jpg'
import React from 'react';

const Sambutan = () => {
  return (
    <section className="sambutan">
      <div className="image">
        <img
          src={kades}
          alt="Kepala Desa margasana"
        />
      </div>
      <div className="description" style={{ marginLeft: 50, marginRight: 50 }}>
        <h1 className="text-4xl font-bold text-center">SAMBUTAN KEPALA DESA</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
          odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
          Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
          Praesent mauris. Fusce nec tellus sed augue semper porta.
          Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti
          sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
          (est velit) eleifend.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
          odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
          Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
          Praesent mauris. Fusce nec tellus sed augue semper porta.
          Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti
          sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
          (est velit) eleifend.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
          odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
          Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
          Praesent mauris. Fusce nec tellus sed augue semper porta.
          Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti
          sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
          (est velit) eleifend.
        </p>
      </div>
    </section>
  );
};

export default Sambutan;