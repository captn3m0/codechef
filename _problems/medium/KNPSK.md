---
{"category_name":"medium","problem_code":"KNPSK","problem_name":"Knapsack Problem","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"rustinpiece","date_added":"31-05-2014","tags":{"0":"cook47","1":"easy","2":"greedy","3":"kostya_by","4":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/KNPSK","time":{"view_start_date":1403464500,"submit_start_date":1403464500,"visible_start_date":1403464500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/KNPSK.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/KNPSK.pdf">Russian</a> as well.</h3>
<p>Mike takes part in programming contests. His favourite topic is dynamic programming(DP). As he said, that he likes problems on DP, because "you spend a lot of time on thinking and a little time on coding".</p>
<p>In this problem you are to solve a version of the knapsack problem(<a href="http://en.wikipedia.org/wiki/Knapsack_problem">link</a>), one of the most famous examples of DP problem.</p>
<p>You are given <b>N</b> items, each has two parameters: a weight and a cost. Let's define <b>M</b> as the sum of the weights of all the items.</p>
<p>Your task is to determine the most expensive cost of a knapsack, which capacity equals to 1, 2, ..., <b>M</b>. A cost of a knapsack equals to the sum of the costs of all the elements of the knapsack. Also, when you have a knapsack with a capacity is equal to <b>C</b>, then you can fill it with items, whose sum of weights is not greater than <b>C</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains one integer <b>N</b>, denoting the number of the items.</p>
<p>The next <b>N</b> lines contain two integers <b>W</b> and <b>C</b> each, denoting the weight and the cost of the corresponding item.</p>
<h3>Output</h3>
<p>For each capacity <b>C</b> (<b>1 ≤ C ≤ M</b>) of the knapsack, output a single integer - the most expensive cost for that capacity.</p>
<h3>Constraints</h3>
<p>3 ≤ <b>N</b> ≤ 100000;</p>
<p>1 ≤ <b>W</b> ≤ 2, for each item;</p>
<p>1 ≤ <b>C</b> ≤ 10<sup>9</sup>, for each item.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 1
2 2
2 3
2 4
2 5

<b>Output:</b>
1 5 6 9 10 12 13 14 15 
</pre><h3>Explanations</h3>
<p>In the test case, <b>M</b> equals to 9.<br /><br />
For <b>C</b> = 1, it's optimal to choose {1} items;<br /><br />
For <b>C</b> = 2, it's optimal to choose {5} items;<br /><br />
For <b>C</b> = 3, it's optimal to choose {1, 5} items;<br /><br />
For <b>C</b> = 4, it's optimal to choose {4, 5} items;<br /><br />
For <b>C</b> = 5, it's optimal to choose {1, 4, 5} items;<br /><br />
For <b>C</b> = 6, it's optimal to choose {3, 4, 5} items;<br /><br />
For <b>C</b> = 7, it's optimal to choose {1, 3, 4, 5} items;<br /><br />
For <b>C</b> = 8, it's optimal to choose {2, 3, 4, 5} items;<br /><br />
For <b>C</b> = 9, it's optimal to choose {1, 2, 3, 4, 5} items.</p>
