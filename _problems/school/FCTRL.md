---
{"category_name":"school","problem_code":"FCTRL","problem_name":"Factorial","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PHP","33":"PIKE","34":"PRLG","35":"PYTH","36":"PYTH 3.4","37":"RUBY","38":"SCALA","39":"SCM guile","40":"SCM qobi","41":"ST","42":"TEXT","43":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin","1":"basic","2":"easy","3":"number"},"editorial_url":"http://discuss.codechef.com/problems/FCTRL","time":{"view_start_date":1232695349,"submit_start_date":1232695349,"visible_start_date":1232695349,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The most important part of a GSM network is so called <EM>Base Transceiver Station</em> (<EM>BTS</em>). These transceivers form the areas called <EM>cells</em> (this term gave the name to the cellular phone) and every phone connects to the BTS with the strongest signal (in a little simplified view). Of course, BTSes need some attention and technicians need to check their function periodically.
</p>
<p>The technicians faced a very interesting problem recently. Given a set of BTSes to visit, they needed to find the shortest path to visit all of the given points and return back to the central company building. Programmers have spent several months studying this problem but with no results. They were unable to find the solution fast enough. After a long time, one of the programmers found this problem in a conference article. Unfortunately, he found that the problem is so called "Traveling Salesman Problem" and it is very hard to solve. If we have <VAR>N</var> BTSes to be visited, we can visit them in any order, giving us <VAR>N</var>! possibilities to examine. The function expressing that number is called factorial and can be computed as a product</p>

<p>
1.2.3.4....<VAR>N</var>. The number is very high even for a relatively small <VAR>N</var>.</p>

<p>The programmers understood they had no chance to solve the problem. But because they have already received the research grant from the government, they needed to continue with their studies and produce at least <EM>some</em> results. So they started to study behavior of the factorial function.</p>
<p>For example, they defined the function <VAR>Z</var>. For any positive integer <VAR>N</var>, <VAR>Z</var>(<VAR>N</var>) is the number of zeros at the end of the decimal form of number <VAR>N</var>!. They noticed that this function never decreases. If we have two numbers <VAR>N</var><SUB>1</sub><<VAR>N</var <SUB>2</sub>, then  <VAR>Z</var>(<VAR>N</var><SUB>1</sub>) <= <VAR>Z</var>(<VAR>N</var <SUB>2</sub>). It is because we can never "lose" any
trailing zero by multiplying by any positive number. We can only get new and new zeros. The function <VAR>Z</var> is very interesting, so we need a computer program that can determine its value efficiently.</p>

<h3>Input</h3>
<p>There is a single positive integer <VAR>T</var> on the first line of input (equal to about 100000). It stands for the number of numbers to follow. Then there are <VAR>T</var> lines, each containing exactly one positive integer number <VAR>N</var>, 1 <= <VAR>N</var> <= 1000000000.</p>

<h3>Output</h3>
<p>For every number <VAR>N</var>, output a single line containing the single non-negative integer <VAR>Z</var>(<VAR>N</var>).</p>

<h3>Example</h3>
<p>Sample Input:</p>
<pre>
6
3
60
100
1024
23456
8735373
</pre>

<p>Sample Output:</p>
<pre>
0
14
24
253
5861
2183837
</pre>