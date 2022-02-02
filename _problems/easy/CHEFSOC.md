---
{"category_name":"easy","problem_code":"CHEFSOC","problem_name":"Chef and Soccer","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"9-04-2016","tags":{"0":"berezin","1":"dynamic","2":"easy","3":"march19","4":"pattern","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHEFSOC","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/CHEFSOC.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/CHEFSOC.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/CHEFSOC.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/CHEFSOC.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/CHEFSOC.pdf) as well.

Chef is a big fan of soccer! He loves soccer so much that he even invented soccer for dogs! Here are the rules of soccer for dogs:
- $N$ dogs (numbered $1$ through $N$) stand in a line in such a way that for each valid $i$, dogs $i$ and $i + 1$ are adjacent.
- Each dog has a skill level, which is either $1$ or $2$.
- At the beginning of the game, Chef passes a ball to dog $1$ (dog $1$ receives the ball).
- For each valid $i$, if dog $i$ has skill level $s$, this dog can pass the ball to any dog with number $j$ such that $1 \le |i-j| \le s$.
- Each dog (including dog $1$) may receive the ball at most once.
- Whenever a dog receives the ball, it must either pass it to another dog or finish the game by scoring a goal.

While the dogs were playing, Chef also created a game for developers. He defined the *result* of a game of soccer for dogs as the sequence of dogs which received the ball in the order in which they received it. The last dog in the sequence is the dog that decided to score a goal; if a dog never received the ball, it does not appear in the sequence. In the game for developers, you should find the number of possible results of soccer for dogs.

Find this number of possible results modulo $10^9 + 7$. Two results of soccer for dogs (sequences of dogs' numbers) are considered different if these sequences have different lengths or if there is a valid index $i$ such that the $i$-th dog in one sequence is different from the $i$-th dog in the other sequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$ denoting the skill levels of the dogs.

### Output
For each test case, print a single line containing one integer - the number of different results of soccer for dogs, modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 2$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (30 points):** $N \le 10^3$

**Subtask #3 (60 points):** original constraints

### Example Input
```
3
4
1 1 1 1
3
2 2 2
4
1 2 1 1
```

### Example Output
```
4
5
6
```

### Explanation
**Example case 1:** The following results are possible: $1$, $[1, 2]$, $[1, 2, 3]$, $[1, 2, 3, 4]$.

**Example case 2:** The following results are possible: $[1]$, $[1, 2]$, $[1, 2, 3]$, $[1, 3, 2]$, $[1, 3]$.
