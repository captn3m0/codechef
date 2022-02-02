---
{"category_name":"hard","problem_code":"INVERT","problem_name":"Gaming Inversion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 5","source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"minimario","date_added":"9-08-2015","tags":{"0":"binary","1":"binary","2":"data","3":"hard","4":"ltime27","5":"ma5termind","6":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/INVERT","time":{"view_start_date":1440923400,"submit_start_date":1440923400,"visible_start_date":1440923400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/mandarin/INVERT.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/russian/INVERT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME27/vietnamese/INVERT.pdf">Vietnamese</a></h3>
<p>Devu and Churu like to play mathematical games. Today, Devu got hold of a 1-indexed array <b>A</b> consisting of <b>N</b> integers while Churu has an empty array <b>B</b>. They have decided to play with these arrays and have agreed to make their moves turn by turn. Devu in his turn will choose a contiguous segment from his array, i.e, 2 integers <b>L</b> and <b>R</b> such that <b>1 ≤ L ≤ R ≤ |A|</b>, where <b>|A|</b> denotes the current size of array <b>A</b>. He then inserts this contiguous subarray into Churu’s array at some position <b>K</b> such that <b>1 ≤ K ≤ |B|+1</b> where <b>|B|</b> denotes the current size of array <b>B</b>.</p>
<p><b>For example:</b> If Devu inserts a subarray of size <b>S</b> at position <b>X</b> into Churu’s array, then all the elements that were present at position <b>Z</b> such that <b>X ≤ Z ≤ |B|</b> will get shifted towards right by <b>S</b> positions. Devu’s array would then get rearranged to accumulate the space that was left vacant by removing the segment <b>L</b> to <b>R</b> of his array.</p>
<p>In Churu's turn, he has to report the total number of inversions in array <b>B</b> after each of Devu's move.</p>
<p>Devu is playing well during each of his moves but Churu is getting slower as the number of elements are increasing in his array <b>B</b>. Therefore, he asks for your help.</p>
<p>You are provided with Devu's array <b>A</b> and a sequence of all his moves. You have to report the inversion count in churu's array <b>B</b> after each of Devu's move.</p>
<p><b>Note : </b><br/></br/></p>
<p>In any arbitrary array <b>C</b>, a pair of indices <b>x</b> and <b>y</b> such that <b>x &lt; y</b> and <b>C[x] > C[y]</b> is known as an inversion.</p>
<h3>Input</h3>
<p>First line of input contains two space separated integers <b>N</b> and <b>Q</b> denoting the size of an array <b>A</b> and number of Devu's moves. Next lines of input contains <b>N</b> space separated integers denoting the elements of Devu's array. Next <b>Q</b> lines contain the <b>Q</b> moves, one move per line. Each move consists of three integers <b>L</b>, <b>R</b> and <b>K</b> such that <b>1 ≤ L ≤ R ≤ |A|</b> and <b>1 ≤ K ≤ |B|+1</b> holds.</p>
<h3>Output</h3>
<p>After each of the Devu's move, report the required answer for Churu.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ N, Q ≤ 10<sup>5</sup></li>
<p></p></b><br />
<b>
<li>1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></li>
<p></p></b>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>subtask 1:</b> 1 ≤ N, Q ≤ 2000 <b>( 30 pts )</b>, TL = 1 sec</li>
<li><b>subtask 2:</b> 1 ≤ N, Q ≤ 10<sup>5</sup>, K = |B|+1 where |B| denotes the current size of array B <b>( 30 pts )</b> </li>
<li><b>subtask 3:</b> 1 ≤ N, Q ≤ 10<sup>5</sup> <b>( 40 pts )</b></li>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
5 4
4 3 2 5 1
1 2 1
3 3 2
2 2 3
1 1 2
</pre><p>
<b>Input</b></p>
<pre>
1
2
3
5
</pre><h3>Explanation</h3>
<ul>
<li>After Q1, <b>A</b> = {2, 5, 1}, <b>B</b> = {4, 3}. Therefore, inversion count in <b>B</b> is 1.</li>
<li>After Q2, <b>A</b> = {2, 5}, <b>B</b> = {4, 1, 3}. Therefore, inversion count in <b>B</b> is 2.</li>
<li>After Q3, <b>A</b> = {2}, <b>B</b> = {4, 1, 5, 3}. Therefore, inversion count in <b>B</b> is 3.</li>
<li>After Q4, <b>A</b> = {}, <b>B</b> = {4, 2, 1, 5, 3}. Therefore, inversion count in <b>B</b> is 5.</li>
</ul>
