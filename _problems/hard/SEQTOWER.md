---
{"category_name":"hard","problem_code":"SEQTOWER","problem_name":"Adding Up Sequences of Towers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"adurysk","date_added":"21-06-2015","tags":{"0":"cook60","1":"devuy11","2":"maths","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/SEQTOWER","time":{"view_start_date":1437330604,"submit_start_date":1437330604,"visible_start_date":1437330600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/mandarin/SEQTOWER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/russian/SEQTOWER.pdf">Russian</a> as well.</h3>
<p>You are given an array <b>A</b> consisting of prime numbers greater than 4.</p>
<pre>
Fun( Sequence S )
{

        if ( S has only 1 element )    return A[S[1]]

        X = S[2...last element]

        return power( A[S[1]] , Fun(X) )

}

</pre><p>where <b>power(A, B)</b> returns <b>A<sup>B</sup></b>, and <b>A</b> is <b>1</b>-indexed.</p>
<p>Fun(S) :<img src = "https://s3.amazonaws.com/codechef_shared/download/seq.png" /></p>
<p>Now you need to find the <b>sum</b> of the values returned by <b>Fun(S)</b> for every <em>distinct sequence</em> <b>S</b>.</p>
<p>Each element of <b>S</b> is an integer from <b>1</b> to <b>N</b>. Thus, there are <b>N<sup>N</sup></b> possible sequences in all. As the values can be large, return it modulo <b>M</b>.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases to follow.</p>
<p>First line of each test case contains two space separated integers <b>N</b> and <b>M</b>.</p>
<p>Second line of the test case contains <b>N</b> (space separated) integers of the array <b>A</b>.</p>
<h3>Output</h3>
<p>
For each test case, output the <b>sum</b> modulo <b>M</b> as explained above.
</p>
<h3>Constraints</h3>
<p>There are two types of test files:</p>
<p><b>File Type 1</b>:</p>
<ul>
<li>2 ≤ <b>N</b> ≤ 100</li>
<li>2 ≤ <b>M</b> ≤ 500</li>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li><b>A<sub>i</sub></b> is a <b>prime number</b> greater than <b>4</b> and less than <b>10<sup>6</sup></b>.</li>
<p>
</p></ul>
<p><b>File Type 2</b>:</p>
<ul>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>2 ≤ <b>M</b> ≤ 5000</li>
<li><b>T</b> = 1 </li>
<li><b>A<sub>i</sub></b> is a <b>prime number</b> greater than <b>4</b> and less than <b>10<sup>6</sup></b>.</li>
<p><br />
</p></ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 23
7 11
4 89
5 7 13 11
4 90
5 5 5 5
4 100
5 11 7 17

<b>Output:</b>
10
27
80
64

</pre><h3>Explanation:</h3>
<p> Test Case 1 : Answer will be (power(7,7)+power(7,11)+power(11,7)+power(11,11) )%23 </p>
