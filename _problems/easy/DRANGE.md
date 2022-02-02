---
{"category_name":"easy","problem_code":"DRANGE","problem_name":"Range of Data","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"1-07-2012","tags":{"0":"ad","1":"aug12","2":"difference","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/DRANGE","time":{"view_start_date":1344677112,"submit_start_date":1344677112,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice has <b>N</b> pieces of paper.
These papers are numbered from <b>1</b> to <b>N</b>.
She writes down the numbers <b>1</b> to <b>N</b> in order (one number on each paper),
i.e. paper <i>i</i> has number <i>i</i> written on it.
Bob messes the numbers on these papers.
He either <b>adds</b> a constant to a number or <b>subtracts</b> a constant from the number.
He performs <b>M</b> such operations.
Each operation is of the form: <b>w x y z</b> where each of them is an integer.
If <b>w = 1</b>, then Alice has to <b>add z</b> to every number on papers <b>x</b> to <b>y</b> (<i>both inclusive</i>).
If <b>w = 2,</b> then Alice has to <b>subtract z</b> from every number on papers <b>x</b> to <b>y</b> (<i>both inclusive</i>).
After doing this, Bob challenges Alice to tell him the range of this data,
where <i>range</i> denotes the count of numbers from the smallest number to the largest (See <a href="http://www.wikihow.com/Find-the-Range-of-a-Data-Set">here</a> for more details).
Your task is to help Alice in finding the range.</p>

<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br />
Each test case starts with a line containing two space separated integers <b>N</b> and <b>M</b>.<br />
Then follow <b>M</b> lines. Each of these lines is of the form <b>w x y z</b>. Each separated by a single space.<br /></p>

<h3>Output:</h3>
<p>For each test case output a single line containing the range of the new data set after Bob's modifications.

<h3>Constraints:</h3>
<pre>1 ≤ T ≤ 20
1 ≤ M ≤ 10000
1 ≤ N ≤ 1000000
1 ≤ x ≤ y ≤ N
0 ≤ z ≤ 100000</pre>

<h3>Example:</h3>
<pre>
<b>Input</b>
1
10 2
2 3 6 4
1 5 9 1

<b>Output:</b>
11

</pre>
<b>Explanation:</b> Initially the papers are as follows: 1 2 3 4 5 6 7 8 9 10. First operation decreases the numbers on paper number 3,4,5 and 6 by 4. Now, the papers look like: 1 2 -1 0 1 2 7 8 9 10. The second operation increases the numbers on papers 5 to 9 by 1. The numbers will now be 1 2 -1 0 2 3 8 9 10 10. Thus, the range is 10 - (-1) = 11.</p>