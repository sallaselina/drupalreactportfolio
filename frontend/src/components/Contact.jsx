import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";

const Contact = () => {
  const [contact, setContact] = useState(null);

  useEffect(() => {
    fetchContent("contact_form/contact_form")
      .then((data) => {
        setContact(data.data[0]);
      })
      .catch((error) => {
        console.error("error message: ", error);
      });
  }, []);
  return (
    <div>
      <h1>Contact</h1>
      {contact && contact.attributes && contact.attributes.body ? (
        <div
          dangerouslySetInnerHTML={{ __html: contact.attributes.body.value }}
        />
      ) : (
        <div> Contact page is empty :D </div>
      )}
    </div>
  );
};

export default Contact;
