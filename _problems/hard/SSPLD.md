---
{"category_name":"hard","problem_code":"SSPLD","problem_name":"S Semi-palindromic","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"15-02-2018","tags":{"0":"april18","1":"chemthan","2":"dp","3":"fft","4":"fwt","5":"hard","6":"palindrome"},"editorial_url":"https://discuss.codechef.com/problems/SSPLD","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/SSPLD.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/SSPLD.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/SSPLD.pdf">Vietnamese</a> as well.</h3>

A non-negative number is called "*$S$ semi-palindromic*" if it is divisible by $S$ and it is possible to rearrange its digits in such a way that the resulting number is palindromic. If the initial number had $D$ digits (without leading zeroes), consider the number obtained by rearranging to have exactly $D$ digits as well (leading zeroes are allowed).

Compute the number of "$S$ semi-palindromic" numbers smaller than $10^K$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $S$ and $K$.

### Output
For each test case, print a single line containing one integer — the answer modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 20$
- $1 \le S \le 16$
- $1 \le K \le 10^{18}$

### Subtasks
**Subtask 1 (10 points):**
- $S \le 2$
- $K \le 10^5$

**Subtask 2 (20 points):** $S \le 2$

**Subtask 3 (70 points):** original constraints

### Example Input
<pre><tt>
3
1 2
2 3
3 4
</pre></tt>

### Example Output
<pre><tt>
19
131
163
</tt></pre>

### Explanation

**Example case 1:** The $1$ semi-palindromic numbers are $0,1,2,3,4,5,6,7,8,9,11,22,33,44,55,66,77,88,99$.