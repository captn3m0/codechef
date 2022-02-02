---
{"category_name":"easy","problem_code":"GUESSRT","problem_name":"Guess It Right","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"abdullah768","problem_tester":null,"date_added":"24-01-2019","tags":{"0":"abdullah768","1":"easy","2":"feb19","3":"modular","4":"optimal","5":"probability"},"editorial_url":"https://discuss.codechef.com/problems/GUESSRT","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/GUESSRT.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/GUESSRT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/GUESSRT.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/GUESSRT.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/GUESSRT.pdf) as well.

Chef is playing a game against a magician. In this game, there are initially $N$ identical boxes in front of Chef and one of them contains a magic pill ― after eating this pill, you would never get compilation errors ever again.

Chef has to determine which box contains the pill. He is allowed to perform at most $M$ moves. In each move, Chef may do one of the following:
- Choose one of the boxes that are in front of him uniformly randomly and guess that this box contains the pill. If the guess is correct, the game ends and Chef gets the pill. Otherwise, after this guess, the magician adds $K$ empty boxes in front of Chef in such a way that Chef cannot determine which boxes were added; the box Chef guessed also remains in front of him and Chef cannot distinguish this box from the other boxes in subsequent moves either.
- Choose a number $X$ such that $X$ is a positive multiple of $K$, but strictly less than the current number of boxes in front of Chef. The magician then removes $X$ empty boxes. Of course, Chef must not perform this move if the current number of boxes is $\le K$.

What is the probability that Chef gets the pill, assuming that he plays optimally ― in a way that maximises this probability? It can be proven that the maximum probability may be expressed as a fraction $P/Q$, where $P$ and $Q$ are coprime positive integers. You should compute $P \cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $K$ and $M$.

### Output
For each test case, print a single line containing one integer ― $P \cdot Q^{-1}$ modulo $10^9+7$, where $P/Q$ is the probability that Chef gets the pill.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N \lt K \le 3 \cdot 10^4$
- $1 \le M \le 3 \cdot 10^4$

### Subtasks
**Subtask #1 (20 points):** 
- $1 \le T \le 100$
- $1 \le N \lt K \le 50$
- $1 \le M \le 50$

**Subtask #2 (20 points):** 
- $1 \le T \le 1,000$
- $1 \le N \lt K \le 100$
- $1 \le M \le 100$

**Subtask #3 (60 points):** original constraints

### Example Input
```
3
5 9 1
7 9 2
3 20 3
```

### Example Output
```
400000003
196428573
555555560
```

### Explanation
**Example case 1:** Chef has only one move, so he should make a guess, which is correct with probability $1/5$. Note that if the guess was incorrect, there would be $14$ boxes in front of Chef afterwards.

**Example case 2:** In his first move, Chef should make a guess. With probability $1/7$, this guess is correct. With probability $6/7$, it is incorrect and there are $16$ boxes in front of Chef afterwards.

In his second move, Chef should again make a guess, which is correct with probability $1/16$. The probability that at least one of Chef's guesses was correct is $\frac{1}{7} + \frac{6}{7} \cdot \frac{1}{16} = 22/112 = 11/56$.

**Example case 3:** In the first move, Chef should make a guess, which is correct with probability $1/3$. In the second move, Chef should ask the magician to remove $X = 20$ boxes, leaving him with $3$ boxes again. In the third move, he should make a guess, which is again correct with probability $1/3$. The resulting probability is $5/9$.
