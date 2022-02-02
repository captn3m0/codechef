---
{"category_name":"medium","problem_code":"CHEFAT","problem_name":"Chef at the Food Fair","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"27-12-2017","tags":{"0":"april18","1":"bciobanu","2":"lazypropagation","3":"medium","4":"segtree","5":"taylor"},"editorial_url":"https://discuss.codechef.com/problems/CHEFAT","time":{"view_start_date":1523957400,"submit_start_date":1523957400,"visible_start_date":1523957400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/mandarin/CHEFAT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/russian/CHEFAT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/APRIL18/vietnamese/CHEFAT.pdf">Vietnamese</a> as well.</h3>

A food fair is being organised in Chef's town. $N$ booths were set up in a straight line and numbered $1$ through $N$. For each $i$ ($1 \le i \le N$), the probability with which the food served at booth $i$ will cause food poisoning at the beginning of the day is $P_i$.

Over the course of the day, the Chef observes that certain booths might decide to offer less unhealthy food based on feedback from customers. You should process $Q$ queries of the following two types:
- $0\;L\;R$ — Compute the probability that eating at each booth between booths $L$ and $R$ (inclusive) does not cause food poisoning.
- $1\;L\;R\;T$ — Each booth between booths $L$ and $R$ (inclusive) starts offering food that is $T$ times more likely to cause food poisoning.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated decimal numbers $P_1, P_2, P_3, \dots, P_N$.
- Each of the following $Q$ lines describes one query in the format $0\;L\;R$ or $1\;L\;R\;T$. Here, $L$ and $R$ are integers and $T$ is a decimal number.

### Output
For each query of type $0$, print a single line containing one real number — the probability of not getting food poisoning. Your answer will be considered correct if its absolute error doesn't exceed $10^{-6}$.

### Constraints
- $1 \le N, Q \le 10^5$
- $0 \le P_i \le 0.9$ for each valid $i$
- $1 \le L \le R \le N$
- $0 \le T < 1$
- all decimals on the input will be given with at most 6 fractional digits

### Subtasks
**Subtask 1 (15 points):** $1 \le N, Q \le 2,000$

**Subtask 2 (85 points):** original constraints

### Example Input
<pre><tt>
4 7
0.1 0.25 0.85 0.43
0 1 3
1 2 4 0.73
1 1 3 0.00255
1 3 4 0.01258
0 1 4
0 2 3
0 3 3
</tt></pre>

### Example Output
<pre><tt>
0.10125000
0.99531391
0.99951473
0.99998009
</tt></pre>

### Explanation
The answer to the first query is $(1 - 0.1) \cdot (1 - 0.25) \cdot (1 - 0.85) = 0.10125$.

After the second query, the probabilities of getting food poisoning at each booth become $[0.1, 0.1825, 0.6205, 0.3139]$.
