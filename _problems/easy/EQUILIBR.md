---
{"category_name":"easy","problem_code":"EQUILIBR","problem_name":"Reach Equilibrium","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"24-06-2018","tags":{"0":"easy","1":"july18","2":"teja349"},"editorial_url":"https://discuss.codechef.com/problems/EQUILIBR","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/EQUILIBR.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/EQUILIBR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/EQUILIBR.pdf">Vietnamese</a> as well.</h3>

Chef is an intern at Zoozle. He has a co-intern named Ajar who's good at maths. Chef wants to impress Ajar with his zoozliness, so he decided to play the following game with A
- Consider $n$ force vectors in a 2D plane.
- First, Ajar uniformly randomly chooses a non-negative real *magnitude* for each vector such that the sum of all magnitudes is equal to $k$. (More formally, each valid $n$-tuple of magnitudes can be chosen with the same probability.)
- Then, Chef must choose a *direction* for each force vector in such a way that the net force (vector sum of all forces) is equal to zero. Chef wins the game if he is able to do that; otherwise, Ajar wins the game.

Since Chef knows that it may not always be possible to choose the directions such that he wins the game, he would like to know the probability that he'll be able to win if he plays optimally. Can you help him?

It can be proven that this probability can be written as a fraction $P/Q$, where $P \ge 0$ and $Q \gt 0$ are coprime integers. Since we are in the 21st century, nobody is interested in fractions. Therefore, you should compute $P\cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ denotes the modular inverse of $Q$ modulo $10^9+7$. (It is guaranteed that this inverse exists and is unique.)

### Input
- The first line of the input contains a single integer $n$ denoting the number of force vectors.
- The second line contains a single integer $k$ denoting the sum of magnitudes of all force vectors.

### Output
Print a single line containing one integer — the value of $P\cdot Q^{-1}$ modulo $10^9+7$.

### Constraints
- $1 \le k \le 100$
- $2 \le n \le 3\cdot10^5$

### Subtasks
**Subtask 1 (20 points):** $2 \le n \le 50$

**Subtask 2 (80 points):** original constraints

### Example Input
```
5
5
```

### Example Output
```
187500002
```

### Explanation
Answer = $11/16 = 11\cdot16^{-1} = 187500002$
