---
{"category_name":"easy","problem_code":"CHEFRAMI","problem_name":"Chef Rami and Inventions","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"joudzouzou","problem_tester":null,"date_added":"26-04-2019","tags":{"0":"dynamic","1":"joudzouzou","2":"ltime71","3":"medium","4":"pointers","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHEFRAMI","time":{"view_start_date":1556384402,"submit_start_date":1556384402,"visible_start_date":1556384402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/LTIME71/hindi/CHEFRAMI.pdf), [Bengali](http://www.codechef.com/download/translated/LTIME71/bengali/CHEFRAMI.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME71/mandarin/CHEFRAMI.pdf), [Russian](http://www.codechef.com/download/translated/LTIME71/russian/CHEFRAMI.pdf), and [Vietnamese](http://www.codechef.com/download/translated/LTIME71/vietnamese/CHEFRAMI.pdf) as well.

In Chef Rami's kitchen, there is a long counter divided into $N$ sections (numbered $1$ through $N$). For each valid $i$, there are $a_i$ raw meals stacked on top of each other in section $i$.

Chef Rami has a special cooking device. This device can take all the meals that are stacked in some section and instantly cook them. He may perform the following operations in any order any number of times (including zero), until all the meals are cooked:
- Choose a section and use the device to cook all the meals in that section. This move costs $X$ units of energy regardless of which section it is applied to.
- Choose a section $i$ ($i \ge 2$) and move all the meals that are located in section $i$ on top of the meals in section $i-1$ (if there are $0$ meals in section $i-1$, all the meals from section $i$ are simply moved). The cost of this move is the number of meals located in section $i$ before the move.
- Choose a section $i$ ($i \lt N$) and move all the meals that are located in section $i$ on top of the meals in section $i+1$. The cost of this move is also the number of meals located in section $i$ before the move.

Since Chef Rami is lazy, he wants to spend the minimum amount of energy to cook all the meals. Help him calculate this value.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of units of energy Chef Rami needs to spend.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 5,000$
- $1 \le X \le 10^9$
- $0 \le a_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $20,000$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N \le 50$
- the sum of $N$ over all test cases does not exceed $500$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
3 3
5 2 4
```

### Example Output
```
8
```

### Explanation
**Example case 1:** One of the optimal solutions is to move all the meals from the second section to the third section, with cost $2$, and then use the device on the first and third sections, with cost $3$ units of energy per use. The total cost is $2+3+3 = 8$ units of energy.
