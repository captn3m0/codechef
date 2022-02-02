---
{"category_name":"hard","problem_code":"QPOINT","problem_name":"Queries With Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"26-09-2013","tags":{"0":"data","1":"geometry","2":"hard","3":"interactive","4":"nov13","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/QPOINT","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/QPOINT.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/QPOINT.PDF"> Russian</a>.</h3>
<p>Let's solve a realistic problem now! You are given the world map where each country is a polygon on the 2D plane. You may already now that the Global Positioning System can help you to know your current coordinate. So how can you determine which country are you in? That what you need to figure out in this problem. We will give you more detail about input and output description now</p>
<p>
There are <b>N</b> countries which are numbered from <b>1</b> to <b>N</b>. Each country is represented by a single simple polygon on the 2D plane. Simple polygon means the boundary of the polygon does not cross itself. You should not confuse simple polygon with convex polygon. There are no two countries share a common point.
</p>
<p>
You have to answer <b>Q</b> queries, each query requires you to find the polygon that contain a specific point. Note that a point on the boundary of the polygon is considered to be inside the polygon. This problem is set in <b>interactive mode </b> that means you need to answer each query right after you read it.
</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>N</b> which is the number of countries</li>
<li>The <b>ith</b> line in the next <b>N</b> lines describes the boundary of the <b>ith</b> country. It starts with an integer <b>k</b> and then <b>k</b> pairs of integers (where each pair represent a vextex in 2D) follow. A country's boundary can be drawn by connecting these pairs of vertices in the same order as supplied using straight lines (Finally connect last vertex with first vertex).
</li><li>The next line contains a single integer <b>Q</b> which is the number of queries.</li>
<li>Each line in the next <b>Q</b> lines contains a pair of integer which is the coordinate in the query.</li>
</ul>
<h3>Output</h3>
<p>For each query you print out one number which is the index of the country that contains the query point. Print out <b>-1</b> if there is no country contains that point.</p>
<p> <b><i>Attention:</i></b> the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout).
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>3</b> ≤ <b>K</b> ≤ <b>300,000</b></li>
<li>Sum of all values of <b>K</b> is less than <b>300,000</b> </li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100,000</b></li>
<li>All coordinates are non-negative integer which are not exceed <b>10<sup>9</sup></b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 1 4 1 7 7 7 7 4
3 1 1 5 3 7 1
3
2 3
3 6
6 2
<b>Output:</b>
-1
1
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The test case is represented in figure below.<br />
The first country is the rectangle ABCD and the second country is a triangle EFG. Notice that the point J at coordinate (6, 2) is considered to be inside the second country when it is on the boundary of this country</p>
<p><a href="http://tinypic.com?ref=x3wh13" target="_blank"><img src="http://i39.tinypic.com/x3wh13.png" border="0" alt="Image and video hosting by TinyPic" /></a></p>
