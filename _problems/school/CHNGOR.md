---
{"category_name":"school","problem_code":"CHNGOR","problem_name":"Chang and Bitwise OR","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":null,"date_added":"25-06-2017","tags":{"0":"cook84","1":"easy","2":"prateekg603"},"editorial_url":"https://discuss.codechef.com/problems/CHNGOR","time":{"view_start_date":1500834600,"submit_start_date":1500834600,"visible_start_date":1500834600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/mandarin/CHNGOR.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/russian/CHNGOR.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGOR.pdf">vietnamese</a> as well.</h3>

Chang is a big fan of bitwise operations. As he was sitting in a boring lecture, he thought of a simple problem but had a tough time figuring out the solution. Help him to solve it. The problem is as follows.

<p>
Given a list of <b>N</b> non-negative integers, you perform the following operation on this list.

<ul>
<li>Select any subsequence of integers from the list and remove the elements of that subsequence. The cost incurred will be <a href="https://en.wikipedia.org/wiki/Bitwise_operation#OR">Bitwise OR</a> of the elements.</li>
</ul>
</p>

<p>
Your task is to remove all the integers from the list by applying the above operation as many times as you want. You want to incur the minimum total cost at the end. Total cost is the sum of all the costs incurred while removing subsequences.
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of the each test case contains a single integer <b>N</b> denoting the number of integers in the list.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the integers in the given list.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, output answer in a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 2

<b>Output:</b>
3
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1.</b>
<p>We can first remove <b>1</b> from the list and then <b>2</b>. Thus, the total cost comes out to <b>3</b>.</p>
<p> The other possible way is to choose the subsequence <b>1</b>, <b>2</b>, and remove it. The Bitwise OR of <b>1</b> and <b>2</b> is <b>3</b>. So the cost incurred will be <b>3</b> in this case too.</p>