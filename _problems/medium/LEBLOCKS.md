---
{"category_name":"medium","problem_code":"LEBLOCKS","problem_name":"Little Elephant and Blocks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"21-03-2012","tags":{"0":"combinatorics","1":"dynamic","2":"june14","3":"medium","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBLOCKS","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/LEBLOCKS1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/LEBLOCKS2.pdf">Russian</a>.</h3>

<p>Little Elephant from Zoo of Lviv has <b>n</b> (0-based numeration) blocks consisted of <b>1x1x1</b> cubes in such way that the size of <b>i-th</b> block is <b>1x1xA<sub>i</sub></b>. Each of the blocks also has a color, which is a positive integer. The color of <b>i-th</b> block is <b>C<sub>i</sub></b>. There will be no more than two blocks of the same color.

</p><p>Little Elephant wants to stack the blocks in the stack. In order to do so, he choose some random permutation <b>P</b> of integers from <b>0</b> to <b>n-1</b>, inclusive, and stacks all the blocks in order of <b>P</b>, i. e. at first he stacks <b>P<sub>0</sub>-th</b> block, then <b>P<sub>1</sub>-th</b> and so on.

</p><p>After stacking Little Elephant has a sequence of size <b>S</b> consisted of cubes (0-based numeration) in order from the stack, where <b>S = A<sub>0</sub> + A<sub>1</sub> + ... + A<sub>n-1</sub></b>. Then he counts the number of such pairs of cubes with indices <b>i</b> and <b>j</b> that <b>j - i = k</b> and <b>i-th</b> cube has same color as <b>j-th</b>. Call this number as colorfulness of the corresponding permutation.

</p><p> Help Little Elephant and for a given <b>n</b>, <b>k</b> and the description of blocks find the expected colorfulness, considering that permutation <b>P</b> is chosen randomly.
 
<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow. First line of each test case contains pair of integers <b>n</b> and <b>k</b>. Next <b>n</b> lines of each test case contain pairs of integers <b>A<sub>i</sub></b> and <b>C<sub>i</sub></b>.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> numbers - the answers for the corresponding test cases. Your answer will considered correct if it has at most <b>10<sup>-6</sup></b> absolute or relative error.</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 10
</p><p>
1 ≤ <b>n</b> ≤ 20
</p><p>
1 ≤ <b>k</b> ≤ 200
</p><p>
1 ≤ <b>A<sub>i</sub></b> ≤ 10
</p><p>
1 ≤ <b>C<sub>i</sub></b> ≤ n

</p><p>
There will be no three or more blocks of the same color in a single test case.

<h3>Example</h3>

<pre>
<b>Input:</b>
1
7 5
3 1
2 2
2 1
4 3
1 2
1 3
4 4

<b>Output:</b>
0.9095238

</pre></p>