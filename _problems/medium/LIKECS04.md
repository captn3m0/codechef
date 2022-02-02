---
{"category_name":"medium","problem_code":"LIKECS04","problem_name":"Numbers Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":"kingofnumbers","date_added":"8-09-2017","tags":{"0":"cook86","1":"dynamic","2":"invariants","3":"likecs","4":"likecs","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/LIKECS04","time":{"view_start_date":1505673000,"submit_start_date":1505673000,"visible_start_date":1505673000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS04.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/russian/LIKECS04.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS04.pdf">Vietnamese</a> as well.</h3>

<p>Chef Dobby loves playing games, especially games related to numbers. So, today Bhuvan gave him a new game. The description of the game goes as follows : </p>

<p>Consider an array <b>A</b> of <b>N</b> non-negative integers. You can do the following move any number of times, pick two numbers from the array <b>(x, y)</b>, such that <b>x ≥ y</b> and convert them into <b>(x - y, 2 * y)</b>. The aim of the game is to make the array contains exactly <b>(N - 1)</b> zeros. If Dobby achieves this, after any number of steps, he wins the game.</p>

<p>Bhuvan wants to know the odds to choose an initial array satisfying for every index <b>i</b>, the condition <b>0 ≤ A[i] ≤ B[i]</b> where B is given in input and Dobby wins the game with such an array. So please help him counting the number of such arrays, since the answer can be very large, output the answer modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Input section</h3>
<p>The first line contains <b>N</b>, denoting the number of elements in the array.</p>

<p>Next line contains <b>N</b> space separated integers, denoting the elements of the array.</p>

<h3>Output section</h3>
<p>Output the number of possible winning arrays modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Input constraints</h3>
<pre>
2 ≤ N ≤ 50
0 ≤ B[i] ≤ 50, where B[i] denotes the i<sup>th</sup> element of the array.
</pre>

<h3>Sample Input</h3>
<pre>
3
2 0 1
</pre>

<h3>Sample Output</h3>
<pre>
4
</pre>

<h3>Explanation</h3>
<p>The possible winning arrays are <b>(1, 0, 0)</b>, <b>(0, 0, 1)</b>, <b>(2, 0, 0)</b> and <b>(1, 0, 1)</b>.</p>

<p>Let us consider why array <b>(2, 0, 1)</b> is losing. The only move is 2 pick the pair <b>(2, 1)</b>. After applying the operation, we get the pair <b>(1, 2)</b>. Thus, only the order of elements in the array change and we are in a situation of deadlock. Thus, Chef Dobby can't convert the array to contain <b>2</b> zeros.</p>