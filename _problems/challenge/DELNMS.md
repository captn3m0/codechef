---
{"category_name":"challenge","problem_code":"DELNMS","problem_name":"Deleting numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"white_king","date_added":"9-06-2013","tags":{"0":"ad","1":"aug13","2":"challenge","3":"order","4":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/DELNMS","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Sereja has an array of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. In one move Sereja can do the following operation</p>
<p style="margin-left:5px">Assume integers <b>v</b> and <b>t</b>, Where <b>1 ≤ v, t ≤ n</b>, such that, all the elements of the array <b>a[v], a[v + t], a[v + t * 2], ... a[v + t * k]</b> Where <b>k ≥ 0</b> are equal.</p>
<p style="margin-left:5px">To delete all elements <b>a[v], a[v + t], a[v + t * 2], ... a[v + t * k]</b> from the array. The remaining elements are written in <b>a</b> without any gaps.</p>
<p style="margin-left:5px">Note that you can not decide the value of <b>k</b>. After you decide the integers <b>v</b> and <b>t</b>, <b>k</b> will be set to the largest value possible. That is, the largest <b>k</b> such that <b>v + t * k ≤ n</b>. Your selection of <b>v</b> and <b>t</b> must satisfy the conditions described above for this value of <b>k</b>.</p>
<p>Sereja wants to delete the entire array. Help him delete all the elements of the array in the fewest number of moves. Since this is a Challenge Problem, your objective is to minimize the number of moves it takes to delete the entire array.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>n</b>, the size of the array. The second line contains integers <b>a[1], a[2], ..., a[n]</b>, the integers written in the array.</p>
<h3>Output</h3>
<p>For each test case print in the first line number <b>q</b>, the number of moves you will take. In next <b>q</b> lines print pairs of the integers <b>v[i], t[i] (1 ≤ i ≤ q)</b>, the values for <b>v</b> and <b>t</b> that you assume during the move <b>i</b>. Be careful with the output sequence and output format. This problem uses a <b>custom judge</b>. Non adherence to the format may lead to verdicts like internal error, run time error and wrong answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n ≤ 100000</b></li>
<li><b>1 ≤ a[i] ≤ 100000</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3
1 1 1
<b>Output 1:</b>
1
1 1

<b>Input 2:</b>
4
1 2 1 2
<b>Output 2:</b>
4
4 4
3 3
2 2
1 1

<b>Input 3:</b>
5
1 2 3 4 1
<b>Output 3:</b>
4
1 4
3 1
2 1
1 1

</pre><h3>Explanation</h3>
<p>In the third case</p>
<ul>
<li>After the move 1 4, we remove 1st and 5th (1 + 4) number, and the array will become: 2 3 4.</li>
<li>After the move 3 1, 4 will be omitted and the array will become 2 3. Note how the 1-based indexes now refer to the positions in the array [2, 3, 4] and not the positions of 2, 3, 4 in the original array.</li>
<li>And after the following two commands 3 and 2 will be removed and the array will become empty.</li>
</ul>
<h3>Scoring</h3>
<p>If your program solves a test case, it receives the score of <b>100*q/n</b> for that test case. Solving a test case means that the given array should be emptied using the given operation. Otherwise the test case is considered, not solved and the verdict Wrong Answer is provided. The total score of the program is simply the sum of the scores for each test files, divided by the number of test files (this is what the generic master judge does). Each test file has a single test case. Since the number of test files are same for everyone, this is effectively equal to the sum of scores for all the test files. In case it isn't apparent yet, the objective of this problem is to minimize your total score.</p>
<h3>Test Generation</h3>
<p>The tests are not randomly generated. Special properties are forced upon the generated array, which may or may not be different for each test case.</p>
