---
{"category_name":"school","problem_code":"CHEFWORK","problem_name":"Workers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"adlet_zeineken","problem_tester":null,"date_added":"3-04-2018","tags":{"0":"adlet_zeineken","1":"april18","2":"array","3":"cakewalk","4":"looping","5":"minimum_element"},"editorial_url":"https://discuss.codechef.com/problems/CHEFWORK","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFWORK.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/CHEFWORK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFWORK.pdf">Vietnamese</a> as well.</h3>

There are $N$ workers; each worker is of one of the following three types:
- A *translator* translates some text from Chef's language to another langague.
- An *author* writes some text in Chef's language.
- An *author-translator* can both write a text in Chef's language and translate it to another language.

Chef wants to have some text written and translated into some language (different from Chef's language). Chef can't do either of those tasks, but he can hire workers. For each $i$ ($1 \le i \le N$), if he hires the $i$-th worker, he must pay that worker $c_i$ coins.

Help Chef find the minimum total number of coins he needs to pay to have a text written and translated. It is guaranteed that it is possible to write and translate a text.

### Input
- The first line of the input contains a single integer $N$ denoting the number of workers.
- The second line contins $N$ space-separated integers $c_1, c_2, ..., c_N$ denoting the numbers of coins Chef has to pay each hired worker.
- The third line contains $N$ space-separated integers $t_1, t_2, ..., t_N$ denoting the types of workers. For each valid $i$, the $i$-th worker is a translator if $t_i = 1$, an author if $t_i = 2$ or an author-translator if $t_i = 3$.

### Output
Print a single line containing one integer — the minimum number of coins Chef has to pay.

### Constraints
- $1 \le N \le 1,000$
- $1 \le c_i \le 100,000$ for each valid $i$
- $1 \le t_i \le 3$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):** all workers are author-translators

**Subtask #2 (85 points):** original constraints

### Example Input
<pre><tt>
5   
1 3 4 6 8   
1 2 1 2 3   
</tt></pre>

### Example Output
<pre><tt>
4
</tt></pre>

### Explanation
Chef can hire 2 workers: worker 1, who is a translator, and worker 2, who is an author. In total, he pays them $1 + 3 = 4$ coins.
