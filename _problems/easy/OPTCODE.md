---
{"category_name":"easy","problem_code":"OPTCODE","problem_name":"Optimize The Slow Code","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-12-2017","tags":{"0":"admin2","1":"gwr17rol","2":"simple","3":"sorting"},"time":{"view_start_date":1516482000,"submit_start_date":1516482000,"visible_start_date":1516482000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef hates unoptimized codes and people who write such codes. One fine day he decided to look through the kitchen's codebase and found a function whose pseudo-code is given here:

<pre><code>input: integer N, list X[1, 2, ..., N], list Y[1, 2, ..., N]

output: integer res

function:

set res = 0;
for i := 1 to N do
   for j := 1 to N do
      for k := 1 to N do
         if (X[i] = X[j]) OR (X[j] = X[k]) OR (X[k] = X[i])
            continue
         else
            set res = max(res, Y[i] + Y[j] + Y[k])
return res
</code>
</pre>

<p>Luckily enough this code gets triggered only if the Head Chef makes a submission. But still there is a possibility that this can crash the judge. So help Chef by writing a new function which does the same thing but is faster.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains an integer <b>N</b> denoting the number of elements in the two lists.</li>
<li>The i-th of the next <b>N</b> lines contains a pair of space-separated integers denoting the values of <b>X[i]</b> and <b>Y[i]</b> respectively.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output an integer corresponding to the return value of the function.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>X[i]</b>, <b>Y[i]</b> ≤ 10<sup>8</sup></li> 
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
3
1 3
3 1
1 2
5
1 3
2 4
1 2
3 2
3 4

<b>Output</b>
0
11
</pre>

<h3>Explanation</h3>
<p><b>Testcase 2:</b> The maximum is attained when i = 1, j = 2 and k = 5. This leads to res being 3 + 4 + 4 = 11. This value is attained in other iterations as well, but it never exceeds this, and hence this is the answer.</p>