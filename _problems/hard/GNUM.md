---
{"category_name":"hard","problem_code":"GNUM","problem_name":"Game of Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"23-05-2014","tags":{"0":"darkshadows","1":"hard","2":"july14","3":"maths","4":"maxflow"},"editorial_url":"http://discuss.codechef.com/problems/GNUM","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/GNUM1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/GNUM.pdf">Russian</a>.</h3>

<p>Mr. Yagami is playing a game of numbers. He has two arrays, each of size <b>N</b> denoted by <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b> and <b>B<sub>1</sub>,B<sub>2</sub>...B<sub>N</sub></b>.</p>
<p>Now, he has to make a move each minute. Let us maintain two sets <b>S1</b> and <b>S2</b> which are empty intially.
In one move , first he'll pick a pair of indexes <b>(i, j)</b> such that it's already not present in <b>S1</b>. Also, <b>B<sub>j</sub> > A<sub>i</sub></b> and <b>GCD(A<sub>i</sub>,B<sub>j</sub>)</b> is not <b>1</b>. Further, he'll pick another pair of indices <b>(p, q)</b> such that it's already not present in <b>S2</b>. Also, <b>B<sub>p</sub> &lt; A<sub>q</sub></b> and <b>GCD(A<sub>q</sub>,B<sub>p</sub>)</b> is not <b>1</b>. Also, <b>GCD(A<sub>q</sub>,B<sub>p</sub>)</b> should not be coprime to <b>GCD(A<sub>i</sub>,B<sub>j</sub>)</b>. And, he'll add both pair of indices to <b>S1</b> and <b>S2</b>, respectively.

<p>Help Mr. Yagami by printing the largest number of moves he can perform.</p>

<h3>Input</h3>
<p>First line contain <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> in one line, followed by two lines of <b>N</b> space separated integers each, denoting arrays <b>A</b> and <b>B</b>, respectively.</p>

<h3>Output</h3>
<p>For each testcase, print the maximum number of moves Mr. Yagami can make, in one line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>400</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
2 5 6 14
3 4 7 10
2
2 3
5 7

<b>Output:</b>
3
0

</pre>
<h3>Explanation</h3>
<p>
First testcase:<br/>
Following are the possible moves denoting by (i,j) and (p,q)<br/>
1st move: (1,2) and (2,3)<br/>
2nd move: (1,4) and (2,4)<br/>
3rd move: (3,4) and (4,4)<br/>
In any possible combination not more than 3 moves are possible.<br/>
<br/>
Second testcase:<br/>
No move is possible.<br/>
</p>