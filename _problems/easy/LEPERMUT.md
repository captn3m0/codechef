---
{"category_name":"easy","problem_code":"LEPERMUT","problem_name":"Little Elephant and Permutations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"2-10-2012","tags":{"0":"ad","1":"cakewalk","2":"cook28","3":"witua"},"time":{"view_start_date":1353263226,"submit_start_date":1353263226,"visible_start_date":1353263400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
The Little Elephant likes permutations. This time he has a permutation <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b> of numbers <b>1</b>, <b>2</b>, ..., <b>N</b>.
</p>
<p style="text-align:justify">
He calls a permutation <b>A</b> good, if the number of its inversions is equal to the number of its local inversions. The number of inversions is equal to the number of pairs of integers (<b>i</b>; <b>j</b>) such that <b>1</b> &le; <b>i</b> &lt; <b>j</b> &le; <b>N</b> and <b>A[i]</b> &gt; <b>A[j]</b>, and the number of local inversions is the number of integers <b>i</b> such that <b>1</b> &le; <b>i</b> &lt; <b>N</b> and <b>A[i]</b> &gt; <b>A[i+1]</b>.
</p>
<p style="text-align:justify">
The Little Elephant has several such permutations. Help him to find for each permutation whether it is good or not. Print <b>YES</b> for a corresponding test case if it is good and <b>NO</b> otherwise.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains a single integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains a single integer <b>N</b>, the size of a permutation. The next line contains <b>N</b> space separated integers <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b>.
</p>
<h3>Output</h3>
<p style="text-align:justify">
For each test case output a single line containing the answer for the corresponding test case. It should be <b>YES</b> if the corresponding permutation is good and <b>NO</b> otherwise.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<b>1</b> &le; <b>T</b> &le; <b>474</b> <br /><br />
<b>1</b> &le; <b>N</b> &le; <b>100</b> <br /><br />
It is guaranteed that the sequence <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b> is a permutation of numbers <b>1</b>, <b>2</b>, ..., <b>N</b>.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1
1
2
2 1
3
3 2 1
4
1 3 2 4

<b>Output:</b>
YES
YES
NO
YES
</pre><h3>Explanation</h3>
<p style="text-align:justify">
<b>Case 1.</b> Here <b>N = 1</b>, so we have no pairs <b>(i; j)</b> with <b>1 &le; i &lt; j &le; N</b>. So the number of inversions is equal to zero. The number of local inversion is also equal to zero. Hence this permutation is good.
</p>
<p style="text-align:justify">
<b>Case 2.</b> Here <b>N = 2</b>, and we have one pair <b>(i; j)</b> with <b>1 &le; i &lt; j &le; N</b>, the pair <b>(1; 2)</b>. Since <b>A[1] = 2</b> and <b>A[2] = 1</b> then <b>A[1] &gt; A[2]</b> and the number of inversions is equal to <b>1</b>. The number of local inversion is also equal to <b>1</b> since we have one value of <b>i</b> for which <b>1 &le; i &lt; N</b> (the value <b>i = 1</b>) and <b>A[i] &gt; A[i+1]</b> for this value of <b>i</b> since <b>A[1] &gt; A[2]</b>. Hence this permutation is also good.
</p>
<p style="text-align:justify">
<b>Case 3.</b> Here <b>N = 3</b>, and we have three pairs <b>(i; j)</b> with <b>1 &le; i &lt; j &le; N</b>. We have <b>A[1] = 3, A[2] = 2, A[3] = 1</b>. Hence <b>A[1] &gt; A[2]</b>, <b>A[1] &gt; A[3]</b> and <b>A[2] &gt; A[3]</b>. So the number of inversions is equal to <b>3</b>. To count the number of local inversion we should examine inequalities <b>A[1] &gt; A[2]</b> and <b>A[2] &gt; A[3]</b>. They both are satisfied in our case, so we have <b>2</b> local inversions. Since <b>2 &ne; 3</b> this permutations is not good.
</p>
<p style="text-align:justify">
<b>Case 4.</b> Here we have only one inversion and it comes from the pair <b>(2; 3)</b> since <b>A[2] = 3 &gt; 2 = A[3]</b>. This pair gives also the only local inversion in this permutation. Hence the number of inversions equals to the number of local inversions and equals to one. So this permutation is good.
</p>
