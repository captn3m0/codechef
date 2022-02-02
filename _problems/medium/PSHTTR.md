---
{"category_name":"medium","problem_code":"PSHTTR","problem_name":"Pishty and tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"30-03-2017","tags":{"0":"datastructure","1":"fekete","2":"july17","3":"medium","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/PSHTTR","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/PSHTTR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/PSHTTR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/PSHTTR.pdf">Vietnamese</a> as well.</h3>


<p>
A little boy Pishty lives in Khust - an ancient town in Uzhlyandia with their medieval castles and smart bears.
</p>

<p>
The gem of Khust is a very valuable castle because it protects the citizens of Uhzlyandia from the Durdom kingdom's army. Pishty also like this castle because it hides old secrets in long halls and high towers...
</p>

<p>
The castle can be described as an undirected tree with <b>N</b> vertices and <b>N - 1</b> edges. Each edge has a magic number <b>C</b>.
</p>

<p>
When a group of tourists visit the castle, they are interested in a path between vertices <b>U</b> and <b>V</b>. They think that an edge is <i>interesting</i> if its magic number is less than or equal to <b>K</b>. The total <i>attractivity</i> of the path is the <a href = "https://en.wikipedia.org/wiki/Bitwise_operation#XOR">xor</a> of all interesting edges on it.
</p>

<p>
The emperor of Uzhlyandia is interested in tourism development, and so he wants to find the total attractivity of the paths for each group.
Because Pishty wants to become the emperor's knight, he wants to know all of this information too. But he can't do it on his own because there are a large number of groups.
Please help Pishty to solve this unthinkable problem.
</p>

<p>
Given <b>M</b> groups of tourists, find the total attractivity of the path for each group.
</p>



<h3>Input</h3>
<p>First line contains one integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test case descriptions follow. </p>
<p>The first line of each testcase contains one integer <b>N</b>, denoting the number of vertices.</p>
<p>The next <b>N</b> - 1 lines contain information about the tree. Each line contains three integers <b>U</b>, <b>V</b> and <b>C</b>, which denote that between vertices <b>U</b> and <b>V</b> is an edge with magical number <b>C</b>.
</p>
<p>
The next line contains one integer <b>M</b>, which denotes the number of requests.
</p>
<p>
The next <b>M</b> lines contain information about the requests. Each line contains three integers <b>U</b>, <b>V</b> and <b>K</b>.
</p>


<h3>Output</h3>
<p> For each request output one integer in a new line - the total attractivity of the path.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</b></li>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>U</b>, <b>V</b> ≤ <b>N</b></li>
<li>1 ≤ <b>C</b>, <b>K</b> ≤ 10<sup>9</sup></li>
</ul>



<h3> Subtasks : </h3>
<p>
<ul>
<li>Subtask 1 : 1 ≤ <b>N</b>, <b>M</b> ≤ 10 (10 pts)</li> 
<li>Subtask 2 : 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>3</sup> (20 pts)</li>
<li>Subtask 3 : 1 ≤ <b>N</b>, <b>M</b> ≤ 10<sup>5</sup> (70 pts)</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 2 1
2 3 2 
2 4 5
3 5 10
6
5 4 5
5 4 10
5 4 1
1 2 1
4 1 10
1 5 8

<b>Output:</b>
7
13
0
1
4
3
</pre>