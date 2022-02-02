---
{"category_name":"medium","problem_code":"CARDLINE","problem_name":"Chef and the Cards","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"iscsi","date_added":"31-07-2015","tags":{"0":"cook61","1":"dynamic","2":"graphs","3":"greedy","4":"medium","5":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/CARDLINE","time":{"view_start_date":1440357545,"submit_start_date":1440357545,"visible_start_date":1440357600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/mandarin/CARDLINE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/russian/CARDLINE.pdf">Russian</a> as well.</h3>
<p>There are <b>N</b> cards placed in a row, where every card has two numbers written on it, one on the top and<br />
one on the bottom. The numbers are between <b>1</b> and <b>N</b> (both inclusive). Every number is written on the top of exactly one card, and on the bottom of exactly one card as well.
</p>
<p>Chef wants to rearrange the cards, such that the length of the longest common contiguous subsequence between the sequence formed by number written on top of the cards, and that formed by those written on the bottom is maximum. He can't modify the numbers written on any card and can't flip the cards, that is, for any card the number written on top remains at the top and the number written on bottom stays at the bottom. Find out the maximum possible length of the common contiguous subsequence.
</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. </p>
<ul>
<li>The first line of each test<br />
case contains an integer <b>N</b>.</li>
<li>The next line contains <b>N</b> space separated  integers <b>A<sub>1</sub>,  A<sub>2</sub>, ... , A<sub>N</sub></b>, where <b>A<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the number written on the top of the <b>i</b>-th card.</li>
<li>The next line contains <b>N</b> space separated  integers <b>B<sub>1</sub>,  B<sub>2</sub>, ... , B<sub>N</sub></b>, where <b>B<sub>i</sub></b>(<b>1</b> ≤ <b>i</b> ≤ <b>N</b>) is the number written at the bottom of the  <b>i</b>-th card. </li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing the integer <b>L</b>: the maximum length of the longest common contiguous subsequence.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 2000 </b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b> N </b></li>
<li>All the elements in both arrays <b>A</b> and <b>B</b> are distinct.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 3 2
2 1 3
8
3 8 4 2 6 1 5 7
5 2 4 3 8 7 6 1

<b>Output:</b>
2
4
</pre><h3>Explanation</h3>
<p>
<b>First Example : </b> <br/><br />
One of the possible card arrangements is: <br />
1 2 3 <br />
2 3 1 </br/></p>
<p>Length of the longest common contiguous subsequence between [1, 2, 3] and [2, 3, 1] is 2, [2, 3]. And that's the maximum possible, so answer is 2.
</p>
<p>
<b>Second Example: </b> <br/><br />
One of the possible card arrangements is : <br/><br />
7 3 2 8 6 5 4 1 <br/><br />
1 5 3 2 8 6 4 7 <br/></br/></br/></br/></br/></p>
<p>The longest common contiguous subsequence has length 4 [3, 2, 8, 6] here. There is no way to arrange these cards such that it's more than 4.
</p>
<h3>Note</h3>
<p>Let <b>L</b> be the answer. Let <b>C<sub>i</sub></b> be the value written on the top of the card at <b>i</b><sup>th</sup> position and <b>D<sub>i</sub></b> be the value written on the bottom of the card at <b>i</b><sup>th</sup> position after rearranging. Then, there should be a pair <b>(x, y)</b> (<b>1 ≤ x,y ≤ N-L+1</b>) such that the condition  <b>C<sub>x+j</sub></b> = <b>D<sub>y+j</sub></b> is satisfied for all <b>j</b>, where <b>0 ≤ j &lt; L</b>. </p>
