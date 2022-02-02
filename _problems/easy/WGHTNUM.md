---
{"category_name":"easy","problem_code":"WGHTNUM","problem_name":"Weight of Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vkrules1104","problem_tester":null,"date_added":"12-03-2018","tags":{"0":"april18","1":"easy","2":"fast","3":"vkrules1104"},"editorial_url":"https://discuss.codechef.com/problems/WGHTNUM","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/WGHTNUM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/WGHTNUM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/WGHTNUM.pdf">Vietnamese</a> as well.</h3>

VK gave a problem to Chef, but Chef is too lazy, so he asked you to solve the problem for him. The statement of the problem follows.


Consider an integer with $N$ digits (in decimal notation, without leading zeroes) $D_1, D_2, D_3, \dots, D_N$. Here, $D_1$ is the most significant digit and $D_N$ the least significant. The *weight* of this integer is defined as $$\sum_{i=2}^N (D_i - D_{i-1})\,.$$

You are given integers $N$ and $W$. Find the number of positive integers with $N$ digits (without leading zeroes) and weight equal to $W$. Compute this number modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $W$ denoting the number of digits and the required weight.

### Output
For each test case, print a single line containing one integer — the number of $N$-digit positive integers with weight $W$, modulo $10^9+7$.

### Constraints
- $1 \le T \le 10^5$
- $2 \le N \le 10^{18}$
- $|W| \le 300$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le T \le 10^3$
- $2 \le N \le 10^3$

**Subtask #2 (80 points):** original constraints

### Example Input
<pre><tt>
1
2 3
</tt></pre>

### Example Output
<pre><tt>
6
</tt></pre>

### Explanation
**Example case 1:** Remember that the digits are arranged from most significant to least significant as $D_1, D_2$. The two-digit integers with weight $3$ are $14, 25, 36, 47, 58, 69$. For example, the weight of $14$ is $D_2-D_1 = 4-1 = 3$. We can see that there are no other possible numbers.
