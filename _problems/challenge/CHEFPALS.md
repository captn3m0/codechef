---
{"category_name":"challenge","problem_code":"CHEFPALS","problem_name":"(Challenge) Chef and Palindromes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"12-10-2015","tags":{"0":"berezin"},"time":{"view_start_date":1516008600,"submit_start_date":1516008600,"visible_start_date":1516008600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef loves palindromes! Chef loves them so much he can see palindromes anywhere! Even in this problem.</p>

<p>Chef has <b>N</b> sequences of white cells. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), the <b>i</b>-th sequence is formed by <b>l<sub>i</sub></b> cells; Chef has to paint exactly <b>b<sub>i</sub></b> of these cells black.</p>

<p>After painting those cells, Chef writes down the lengths of all white blocks (maximum contiguous subsequences of white cells) from left to right as a single string of digits.</p>

<p>For example, if Chef's initial sequence of cells is <b>"wwwwwwwww"</b> and he has to paint three cells black, he can get <b>"bwwbwbwww"</b> ('w' stands for a white cell, 'b' for a black cell). In this case, he will write down the lengths of white blocks 2, 1, 3 as the string <b>"213"</b>. He can also paint it to get <b>"bbwwwwwbw"</b> and write down <b>"51"</b>. He can even paint it to get <b>"bbbwwwwww"</b> and write down <b>"6"</b>. There are many other options as well.</p>

<p>After painting all sequences, Chef will have written down a list of <b>N</b> strings. Now he can reorder these strings <b>in any way he wants</b> and concatenate them into one string <b>S</b>.</p>

<p>It's time for palindromes! Chef wants the resulting string <b>S</b> to be as close to a palindrome as possible. The distance of <b>S</b> to a palindrome is defined as the minimum number of characters in <b>S</b> that Chef needs to change to get a palindrome.</p>

<p>For example, the string <b>"123345"</b> has distance 2 to a palindrome. Strings <b>"2"</b> and <b>"1221"</b> have distance 0 to a palindrome, since they are already palindromes.</p>

<p>You need to find a way to paint some cells, reorder and concatenate the resulting strings to form a string <b>S</b> with the minimum possible distance to a palindrome.</p>


<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>l<sub>1</sub>, l<sub>2</sub>, ..., l<sub>N</sub></b>.</li>
<li>The third line contains <b>N</b> space-separated integers <b>b<sub>1</sub>, b<sub>2</sub>, ..., b<sub>N</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p><ul>
<li>The first <b>N</b> lines of the output should describe the sequences of cells obtained after painting some cells black.</li>
<li>The <b>i</b>-th of these lines should contain a single string of length <b>l<sub>i</sub></b> consisting of letters 'b' and 'w'. There should be exactly <b>b<sub>i</sub></b> letters 'b' in this string.</li>
<li>The following line should contain a sequence of <b>N</b> space-separated integers <b>p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>N</sub></b> denoting the order of strings written down for each sequence of cells — the <b>i</b>-th string in the concatenation should be the string written down for the <b>p<sub>i</sub></b>-th sequence of cells. <b>p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>N</sub></b> has to be a permutation of numbers 1 through <b>N</b>.</li>
</ul></p>

<h3>Constraints</h3>
<ul>
<li><b>N</b> = 1000</li>
<li>1 ≤ <b>l<sub>i</sub></b> ≤ 1000 for each valid <b>i</b></li>
<li>0 ≤ <b>b<sub>i</sub></b> < <b>l<sub>i</sub></b> for each valid <b>i</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

4
5 10 3 8
2 2 1 2

<b>Output:</b>

wwbbw
wwwwbbwwww
wwb
wwwwbbww
2 1 3 4
</pre>

<h3>Explanation</h3>
<p><ul>
<li>In the first sequence of cells, painting the third and fourth cell gives <b>"wwbbw"</b> with white blocks of lengths 2 and 1, which gives Chef the string <b>"21"</b>.</li>
<li><b>"wwwwbbwwww"</b> gives Chef the string <b>"44"</b>.</li>
<li><b>"wwb"</b> gives Chef <b>"2"</b>.</li>
<li><b>"wwwwbbww"</b> gives Chef <b>"42"</b>.</li>
</ul>
</p>
<p>After reordering the strings "21", "44", "2", "42" using the permutation (2, 1, 3, 4), Chef gets strings "44", "21", "2", "42" and concatenates them to <b>S</b> = <b>"4421242"</b>. The distance of this string to a palindrome is 1, as Chef only has to replace the last digit with '4' to get a palindrome.
</p>


<h3>Scoring</h3>
<p><ul>
<li>If your output is invalid in at least one test case, you will receive WA verdict.</li>
<li>Your score for each test case is equal to the distance of the string <b>S</b> (obtained for your output) to a palindrome plus 1.</li>
<li>The total score for a submission is the sum of scores for all test cases.</li>
<li>Your goal is to minimise the total score.</li>
<li>During the contest, your score will be calculated only for one test case from each of groups 1, 3, 5 and 7 of test cases. After the contest, there will be a rejudge using all test cases from all groups.</li>
</ul></p>


<h3>Test generation</h3>
<p><ul>
<li>Let random(<b>x</b>) denote a uniformly random integer in the range [0, <b>x</b>].</li>
<li>For each valid <b>i</b>, <b>l<sub>i</sub></b> = random(999) + 1.</li>
<li>There will be 8 groups of test cases, groups 1, 3, 5 have 3 test-cases each, and groups 2, 4 have 4 test-cases each, while groups 6, 7, 8 have one test-case each.<ul>
<li>In group 1, <b>b<sub>i</sub></b> = random(random(<b>l<sub>i</sub></b> - 1)) for each valid <b>i</b>.</li>

<li>In group 2, <b>b<sub>i</sub></b> = random(random(random(<b>l<sub>i</sub></b> - 1))) for each valid <b>i</b>.</li>

<li>In group 3, <b>b<sub>i</sub></b> = random(random(random(random(<b>l<sub>i</sub></b> - 1)))) for each valid <b>i</b>.</li>

<li>In group 4, <b>b<sub>i</sub></b> = random(random(random(random(random(<b>l<sub>i</sub></b> - 1))))) for each valid <b>i</b>.</li>

<li>In group 5. <b>b<sub>i</sub></b> = random(random(random(random(random(random(<b>l<sub>i</sub></b> - 1)))))) for each valid <b>i</b>.</li>

<li>In group 6. <b>b<sub>i</sub></b> = random(random(random(random(random(random(random(random(<b>l<sub>i</sub></b> - 1)))))))) for each valid <b>i</b>.</li>

<li>In group 7. <b>b<sub>i</sub></b> = random(random(random(random(random(random(random(random(random(<b>l<sub>i</sub></b> - 1))))))))) for each valid <b>i</b>.</li>


<li>In group 8. <b>b<sub>i</sub></b> = random(random(random(random(random(random(random(random(random(random(<b>l<sub>i</sub></b> - 1)))))))))) for each valid <b>i</b>.</li>
</ul></li>
</ul></p>
