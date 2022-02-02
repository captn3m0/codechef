---
{"category_name":"medium","problem_code":"VAIMIN","problem_name":"Vaibhav and Ministers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vaibhav18197","problem_tester":null,"date_added":"3-12-2017","tags":{"0":"april18","1":"combinatorics","2":"dynamic","3":"generalized","4":"medium","5":"vaibhav18197"},"editorial_url":"https://discuss.codechef.com/problems/VAIMIN","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/VAIMIN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/VAIMIN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/VAIMIN.pdf">Vietnamese</a> as well.</h3>

Shortly after joining the Parliament, our Chef has been elected as the new Prime Minister. Now, being the PM, he can do one good or bad deed per day. Initially, Chef has a *reputation* with his cabinet equal to $0$; when he does a good deed, his reputation increases by $1$ and when he does a bad deed, his reputation decreases by $1$.

Chef plans to do exactly $p$ good deeds and exactly $q$ bad deeds. However, to do a bad deed, his reputation must be strictly greater than $c$ (before doing this deed) — otherwise, he would lose the confidence of his cabinet and be forced to resign.

DGP Vaibhav has been dealing with corrupt ministers for a long time. In the past, he has arrested $M$ corrupt ministers. For each $1 \le i \le M$, when the $i$-th minister was arrested, that minister had done $g_i$ good deeds and $b_i$ bad deeds. Over time, Vaibhav has become an expert at detecting and arresting corrupt ministers — Chef is certain that immediately after he performs exactly $g_i$ good deeds and exactly $b_i$ bad deeds (for some $i$ between $1$ and $M$ inclusive), he will end up arrested by Vaibhav. Since Chef plans to be a good PM, we may assume he won't be arrested by Vaibhav for any other reason.

Compute the number of sequences of good and bad deeds Chef can perform in order to execute his plan without getting arrested by Vaibhav or losing the confidence of his cabinet, modulo $10^9 + 7$.

### Input
- The first line of the input contains four space-separated integers $p$, $q$, $c$ and $M$ denoting the total number of good deeds, total number of bad deeds, the reputation threshold and the number of previously arrested ministers.
- Each of the following $M$ lines contains two space-separated integers $g$ and $b$ denoting the number of good deeds and the number of bad deeds of an arrested minister.

### Output
Print a single line containing one integer — the number of possible sequences modulo $10^9 + 7$.

### Constraints
- $1 \le M \le 3,000$
- $0 \le p, q, c \le 2,000,000$
- $0 \le g, b \le 2,000,000$

### Subtasks

**Subtask #1 (30 points):** $0 \le p, q \le 2,000$

**Subtask #2 (70 points):** original constraints

### Example Input
<pre><tt>
5 2 2 6
3 4
1 5
4 4
5 0
2 2
5 0
</tt></pre>

### Example Output
<pre><tt>
4
</tt></pre>

### Explanation

There are only 4 ways to do 5 good and 2 bad deeds without losing the cabinet's confidence and without being caught by Vaibhav:
<pre><tt>
- G G G G B G B
- G G G G B B G
- G G G B G G B
- G G G B G B G
</tt></pre>

### Note

<pre><tt>
- G G B G G G B is not a valid sequence since after doing G G his reputation
is just 2 units and committing a B after that him lose the confidence of the
cabinet.
- G G G G G B B is not valid since on committing G G G G G Chef will have
committed 5 good deeds and 0 bad deeds which will get him arrested by
Vaibhav.  
</tt></pre>
