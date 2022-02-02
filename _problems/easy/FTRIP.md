---
{"category_name":"easy","problem_code":"FTRIP","problem_name":"Field Trip","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"pieguy","date_added":"27-03-2013","tags":{"0":"may13","1":"probability","2":"simple","3":"simple","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/FTRIP","time":{"view_start_date":1368440891,"submit_start_date":1368441000,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice's school is planning to take some students from her class on a field trip. Alice is really excited about it. There are a total of <b>S</b> students in her class. But due to budget constraints, the school is planning to take only <b>N</b> students for the trip. These students will be picked randomly. And each student has equal chance of being picked.</p>
<p>Alice's friend circle has <b>M</b> students including her. Though she is excited about the field trip, she will enjoy it only if there are atleast <b>K</b> of her friends with her on the trip. She is wondering what are the chances of that happening. She needs your help. Tell her the probability that she will enjoy given that she goes on the trip.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test starts with a single line having 4 space separated integers, <b>S</b>, <b>N</b>, <b>M</b> and <b>K</b>.</br/></p>
<h3>Output:</h3>
<p>For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10<sup>-6</sup>.<br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>S</b> ≤ 1000
1 ≤ <b>N</b> ≤ <b>S</b>
1 ≤ <b>M</b> ≤ <b>S</b>
0 ≤ <b>K</b> &lt; <b>M</b>

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
3
10 10 5 3
10 4 6 4
3 2 2 1


</pre><p><b>Output:</b></p>
<pre>
1.000000
0.000000
0.500000
</pre><h3>Explanation:</h3>
<p><b>Case #1:</b><br />
Every student will be taken to the trip. So all her 4 friends will accompany her to the trip no matter what. <br/><br />
<b>Case #2:</b><br />
Alice wants 4 out of her 5 friends to come along with her which isn't possible because the school is willing to pick only 4 students for the trip.</br/></p>
