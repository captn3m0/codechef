---
{"category_name":"hard","problem_code":"TICKETS","problem_name":"Selling Tickets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"subra","date_added":"11-03-2012","tags":{"0":"hard","1":"may12","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/TICKETS","time":{"view_start_date":1336723380,"submit_start_date":1336723380,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has prepared a large number of unique dishes for a fancy dinner.
Patrons from all over the world are interested in purchasing tickets for the dinner.
Each interested patron has specified 2 dishes that they are interested in eating for dinner.
As long as a patron is served at least one of their 2 preferred dishes, they will be happy.
Chef wants to sell as many tickets as possible while being able to guarantee that all patrons are happy.
Unfortunately, Chef has no control over who buys the tickets, only how many will be sold.
How many tickets can Chef sell?</p>
<h3>Input</h3>
<p>
Input will begin with an integer T, the number of test cases.
Each test case begins with 2 integers N and M, 
the number of dishes and number of patrons, respectively.
M lines follow, each containing 2 distinct integers between 1 and N, inclusive.
The numbers on the i-th line represent the preferred dishes of the i-th patron.
Each test case is followed by a blank line.
</p>
<h3>Output</h3>
<p>For each test case, output a single integer indicating the maximum number of tickets
Chef can sell while still being able to guarantee that every patron will be happy no matter which patrons buy tickets.</p>
<h3>Sample Input</h3>
<pre>3
6 4
1 2
1 2
3 4
5 6

6 5
1 2
1 2
1 2
3 4
5 6

4 5
1 2
1 3
1 4
2 3
3 4
</pre>
<h3>Sample Output</h3>
<pre>
4
2
4

</pre>

<p>
In the second example, Chef cannot sell 3 tickets because it's possible that 3 patrons will arrive all preferring dishes 1 or 2.
</p>

<h3>Constraints</h3>
<ul>
<li>T ≤ 15</li>
<li>2 ≤ N ≤ 200</li>
<li>0 ≤ M ≤ 500</li>
</ul>