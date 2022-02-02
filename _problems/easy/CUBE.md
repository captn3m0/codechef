---
{"category_name":"easy","problem_code":"CUBE","problem_name":"Cube Cakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":"gerald","date_added":"1-10-2013","tags":{"0":"dec13","1":"easy","2":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/CUBE","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/CUBE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/CUBE.pdf">Russian</a>.</h3>
<p>This winter our chef plans to unveil his latest creation - Cube Cakes. As the name suggests, this new delicacy is a cake in the form of a perfect cube with secret ingredients from the chef's inventory. Since it is a relatively new creation of the chef, he wants to master the ability to make perfectly identical Cube Cakes. For this, he wants you to write a program that will calculate the similarity between two given Cube Cakes. </p>
<p> <br/></br/></p>
<p> Each Cube Cake can be represented as a cube of size <b>N</b> where each cell of the cube contains a lowercase alphabet ('a'-'z').  The similarity between two Cube Cakes ( of size <b> N </b>  each ) is defined as the maximum sized <i>common</i> sub-cube that exists at exactly the same position in both the Cube Cakes. Two sub-cubes are said to be <i>common</i> if at-least <b>P%</b> of their corresponding characters are equal. You need to find the size <b>S</b> of the largest such sub-cube and also the number of <i>common</i> sub-cubes of size <b>S</b> in the Cube Cake.</p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of test cases. Then the descriptions of testcases follows. </p>
<p> The first line of each testcase contains integers <b>N</b> (the size of the Cube Cakes <b>A</b> and <b>B</b> that are to be compared) and <b> P</b>.<br />
The next line contains a string <b>S<sub>A</sub></b> containing <b> N<sup>3</sup> </b> lowercase characters ('a'-'z'), where the <b> A[i][j][k]<sup>th</sup></b> element of the Cube Cake <b>A</b> is given by <b>S<sub>A</sub>[ i*N*N + j*N + k ]</b> where <b>0</b> ≤ <b> i, j, k </b>  ≤ <b> N-1 </b>.<br />
The next line contains a string <b>S<sub>B</sub></b> containing <b> N<sup>3</sup> </b> lowercase characters ('a'-'z'), <b>S<sub>B</sub></b> is the description of the Cube Cake <b>B</b> in the way analogical to <b>A</b>.
</p>
<h3>Output</h3>
<p> For every test case, print in a single line the similarity between the two Cube Cakes <b> S </b> and the number of <i>common</i> sub-cubes of size <b>S</b>.<br />
If there is no <i>common</i> sub cube present, just print <b>-1</b> in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b> ≤ <b>T</b> ≤ <b> 40</b></li>
<li><b> 1 </b> ≤ <b>N</b> ≤ <b> 40</b></li>
<li><b> 0 </b> ≤ <b>P</b> ≤ <b> 100</b></li>
<li><b> | S<sub>A</sub> |, |S<sub>B</sub> |  </b> = <b> N<sup>3</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 40
abcdefgh
abcdefgh
2 100
abcdefgh
ccccccch
1 100
a
b

<b>Output:</b>
2 1
1 2
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
Since both the Cube Cakes are identical, the whole cube matches and hence the similarity is <b>2</b>. Also, there is only one sub-cube of size <b>2</b>.
 </br/></p>
<p><b>Example case 2.</b><br/><br />
Since <b>P</b> is <b>100</b>, all characters in the sub-cube must match. The sub cube <b>'c'</b> and <b>'h'</b> each of size <b>1</b> are the largest cube satisfying this criteria. Hence the similarity is <b> 1 </b> and corresponding count is <b>2</b> .</br/></p>
<p><b>Example case 3.</b><br/><br />
Since no  characters match in the cube, we cannot find a <i>common</i> subcube here. </br/></p>
