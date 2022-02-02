---
{"category_name":"easy","problem_code":"CHNGSUM","problem_name":"Chang and Perfect Quadruples","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":null,"date_added":"25-06-2017","tags":{"0":"cook84","1":"medium","2":"prateekg603"},"editorial_url":"https://discuss.codechef.com/problems/CHNGSUM","time":{"view_start_date":1500834600,"submit_start_date":1500834600,"visible_start_date":1500834600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/mandarin/CHNGSUM.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/russian/CHNGSUM.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGSUM.pdf">vietnamese</a> as well.</h3>

<p>
Chang was not able to sleep well last night as he was thinking about a problem which still remains unsolved. Since he has only a day left to solve this problem and hand it to the interviewer, you being his friend decide to help him solve this so that he can clear this round and get a much-needed job. The problem is as follows.</p>

<p>
Given a list <b>L</b> of <b>N</b> integers, Chang defines a perfect quadruple <b>(i, j, k, l)</b> such that:
<ul> 
<li><b>i, j, k, l</b> are the indices of the list</li>
<li><b>i ≤ j < k ≤ l</b></li>
</ul>
</p>
<p>
You need to find the summation of <b>F(i, j, k, l)</b> over all perfect quadruples <b>(i, j, k, l)</b>.
<b>F(i, j, k, l)</b> is calculated as the product of maximum element in range <b>[i, j]</b> and the minimum element in range <b>[k, l]</b>. Since, the answer can be large, print it modulo <b>10^9 + 7</b>. 
</p>

<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b> denoting the number of elements in the list.</p>
<p>The second line contains <b>N</b> space-separated integers <b>L<sub>1</sub></b>, <b>L<sub>2</sub></b>, ..., <b>L<sub>N</sub></b> denoting the elements of the list.</p>

<h3>Output</h3>
<p>Ouput an integer corresponding to the answer to the only test case in a line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b> 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 1 3

<b>Output:</b>
19
</pre>

<h3>Explanation</h3>
<p>
The perfect Quadruples and their individual contribution is calculated as.</p>
<p>
<pre><b>F(1, 1, 2, 2) = 2*1 = 2</b>
<b>F(1, 1, 2, 3) = 2*1 = 2</b>
<b>F(1, 1, 3, 3) = 2*3 = 6</b>
<b>F(1, 2, 3, 3) = 2*3 = 6</b>
<b>F(2, 2, 3, 3) = 1*3 = 3</b>
</pre>
</p>
<p>
All these values sum up to <b>19</b>.
</p>