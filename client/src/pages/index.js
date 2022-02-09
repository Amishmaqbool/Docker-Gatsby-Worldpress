import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"
import { useStaticQuery, graphql } from "gatsby"
import Layout from "../components/layout"
import Seo from "../components/seo"

const IndexPage = () => {
  // query content for WordPress posts
 

  const data = useStaticQuery(graphql`
   { 
    allWpPost {
      nodes {
        id,
        title
      }
    }
  }
`);
  console.log("data is here", data)
  return (
    <Layout>
      <Seo title="Home" />
      <h1>Hi people</h1>
      <p>Welcome to your new Gatsby site.</p>
      <p>Now go build something great.</p>
      <h2>List of posts</h2>
      {data?.allWpPost?.nodes?.map(({id, title}) => (
         <h3 key={id}>{title}</h3>
      ))}
      <StaticImage
        src="../images/gatsby-astronaut.png"
        width={300}
        quality={95}
        formats={["auto", "webp", "avif"]}
        alt="A Gatsby astronaut"
        style={{ marginBottom: `1.45rem` }}
      />
      <p>
        <Link to="/page-2/">Go to page 2</Link> <br />
        <Link to="/using-typescript/">Go to "Using TypeScript"</Link> <br />
        <Link to="/using-ssr">Go to "Using SSR"</Link> <br />
        <Link to="/using-dsg">Go to "Using DSG"</Link>
      </p>
    </Layout>
  )
}

export default IndexPage
