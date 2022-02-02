---
{"category_name":"hard","problem_code":"WESTAND","problem_name":"Chef and Direction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.5","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TCL","45":"TEXT","46":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":null,"date_added":"30-04-2016","tags":{"0":"omelyanenko"},"time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef has opened new restaurant "Direction" and his first problem is to find cooks. Chef has <b>K</b> candidates, each of them is characterized by <b>P[i]</b> and <b>S[i]</b> - the number of dishes that he can cook per minute and the salary he wants, cook gets salary only once. Two cooks can't work on the one order together, but every cook whenever he wants can interrupt another cook and start working on his order, even if the previous cook doesn't finish some of the dishes from order. Moreover, the transition from one order to another is instantaneous (this time can be ignored).
</p>
<p>
The restaurant has received <b>N</b> orders. Each order is characterized by two numbers <b>D[i]</b> i <b>M[i]</b> - the number of dishes in order and the number of minutes that client is ready to wait. "Direction" is a new restaurant, so Chef doesn't want to leave bad impression on clients and doesn't want to let them go hungry.
</p>
<p>
Chief asks you to help him to resolve which of the <b>K</b> candidates should get an offer for this job. So, you have to choose some candidates, which can prepare all orders in time and at the same time you have to minimize expenses for the salaries for cooks. "Direction" opens in a minute with number 0. If you can not fulfill all orders in time, then output "-1".
</p>

<h3>Input</h3>
<p>
The first line of input contains a single integer <b>T</b> denoting the number of test cases. This will be followed by <b>T</b> test cases. <br>
The first line of each test case contains integer <b>K</b> denoting numbers of candidates.<br>
Each of the next K line of each test case contains two integers <b>P[i]</b> and <b>S[i]</b> denoting the number of dishes that cook with number <b>i</b> can cook per minute and the salary he wants.<br>
The next line of each test case contains <b>N</b> denoting numbers of orders.<br>
Each of the next <b>N</b> lines of each test case contains two integers <b>D[i]</b> and <b>M[i]</b> denoting the number of dishes in order with number <b>i</b> and the number of minutes that client with number <b>i</b> is ready to wait.
</p>

<h3>Output</h3>
<p>
For each test case in a separate line output the minimum of possible costs for hiring cooks or "-1".
</p>

<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b> </li>
<br>
<b>Subtask 1 : 10 points </b> 
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b>P[i]</b> ≤ <b>1000</b> </li>
<li><b>1</b> ≤ <b>S[i]</b> ≤ <b>100</b> </li>
<li>N</b> = <b>1</b> </li>
<li><b>1</b> ≤ <b>D[i]</b> ≤ <b>10000</b> </li>
<li><b>1</b> ≤ <b>M[i]</b> ≤ <b>100</b> </li>
<br>
<b>Subtask 2 : 30 points </b> 
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b>P[i]</b> ≤ <b>1000</b>, <b>P[1]</b> = <b>P[2]</b> = ... = <b>P[K]</b> </li>
<li><b>1</b> ≤ <b>S[i]</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b> </li>
<li><b>1</b> ≤ <b>D[i]</b> ≤ <b>10000</b> </li>
<li><b>1</b> ≤ <b>M[i]</b> ≤ <b>100</b> </li>
<br>
<b>Subtask 3 : 60 points</b>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b> </li>
<li><b>1</b> ≤ <b>P[i]</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>S[i]</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b> </li>
<li><b>1</b> ≤ <b>D[i]</b> ≤ <b>10000</b> </li>
<li><b>1</b> ≤ <b>M[i]</b> ≤ <b>100</b> </li>
<br>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>
4
4
1 6
1 7
4 1
1000 15
3
2 1
2 1
2 1
2
3 2
1000 15
2
2 1
2 1
3
4 1
1 1
1 4
2
3 1
3 1
3
4 76
2 70
1 82
4
5 3
7 2
3 1
5 3
</tt>

<b>Output:</b>
<tt>
14
15
-1
228
</tt>
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1.</b><br>
<tt>
Chef has to hire first, second and third cooks(6 + 7 + 1 = 14).<br>
Cook 1:<br>
  0 - 0.(3) sec - first order<br>
  0.(3) - 0.(6) sec - second order<br>
  0.(6) - 1 sec - third order<br>
Cook 2:<br>
  0 - 0.(3) sec - second order<br>
  0.(3) - 0.(6) sec - third order<br>
  0.(6) - 1 sec - first order<br>
Cook 3:<br>
  0 - 0.(3) sec - third order<br>
  0.(3) - 0.(6) first order<br>
  0.(6) - 1 second order<br>
</tt>
<b>Example case 2.</b><br>
<tt>
Chef has to hire only the second cook(15).<br>
Cook 3:<br>
  0 - 0.002 first order<br>
  0.002 - 0.004 second order<br>
</tt>
<b>Example case 3.</b><br>
<tt>
Even if Chef hire all cooks they can't make all orders on time, therefore answer is -1.<br>
</tt>
<b>Example case 4.</b><br>
<tt>
Chef has to hire all cooks(76 + 70 + 82 = 228).<br>
Cook 1:<br>
  0 - 0.5 third order<br>
  0.5 - 2 second order<br>
  2 - 2.5 fourth order<br>
  2.5 - 3 first order<br>
Cook 2:<br>
  0 - 0.5 second order<br>
  0.5 - 1 third order<br>
  1 - 2.5 first order<br>
  2.5 - 3 fourth order<br>
Cook 3:<br>
  0 - 2 fourth order<br>
</tt>
</p>