---
{"category_name":"medium","problem_code":"BUILDIT","problem_name":"Expected Buildings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":"mgch","date_added":"17-05-2018","tags":{"0":"june18","1":"likecs","2":"matrix","3":"medium","4":"recurrences","5":"teja349","6":"teja349"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/BUILDIT.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/BUILDIT.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/BUILDIT.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef is standing in the centre of a circle. The perimeter of the circle is divided into $h$ units (numbered $1$ through $h$) and some of those units contain buildings. There are $N$ buildings in total (numbered $1$ through $N$); let's denote the position of building $i$, i.e. the number of the unit containing this building, by $p_i$. Note that a unit may contain more than one building.

Chef has a *vision range* equal to $x$. This means he can look at an arbitrary contiguous range of $x$ units at the same time.

Chef likes to play with his girlfriend Cheftanya. Since he belongs to Wakanda, he decided to play a shooting game. In this game, he is going to look in some direction and shoot all the buildings he sees (without looking in any other direction). Cheftanya chooses the direction in which he looks; since she loves mathematics, she is going to choose this direction randomly using a special probability density function defined below. Before playing the game, though, she is interested in the expected number of buildings Chef will shoot. Chef is going to be busy shooting, so she asks for your help. Can you impress Cheftanya with your skills?


This expected value can be written as a fraction $P/Q$, where $P$ and $Q$ are coprime. Since we are in the 21st century, nobody is interested in fractions. Therefore, you should compute $P\cdot Q^{-1}$ modulo $163577857$, where $Q^{-1}$ denotes the modular inverse of $Q$ modulo $163577857$. (It is guaranteed that this inverse exists and is unique.)

Consider a sequence of integers $a_1, a_2, \dots, a_h$; let's denote $s=\sum_{i=1}^h a_i$. We guarantee that $s$ is not divisible by respective modulo ($163577857$).
 For each $i$ ($1 \le i \le h$), the probability that Cheftanya directs Chef to look at units $i, i+1, \dots, i+x-1$ is $a_i / s$; the units are cyclic, so we can consider "unit $i$" to be equivalent to "unit $i-h$". Since the sequence $a$ can be very large, you are only given its first $K$ elements. You are also given a sequence $c_1, c_2, \dots, c_K$; the remainder of sequence $a$ can be generated using the formula 
$$a_i = \sum_{j=1}^K c_j\cdot a_{i-j} \quad \forall\,i:\;K \lt i \le h\,.$$

### Input
- The first line of the input contains a single integer $N$ denoting the number of buildings.
- The second line contains a single integer $h$ denoting the total number of units the circle is divided into.
- The third line contains a single integer $x$ denoting Chef's vision range.
- The fourth line contains a single integer $K$.
- The fifth line contains $N$ space-separated integers $p_1, p_2, \dots, p_N$ denoting the positions of the buildings.
- The sixth line contains $K$ space-separated integers $a_1, a_2, \dots, a_K$.
- The seventh line contains $K$ space-separated integers $c_1, c_2, \dots, c_K$ denoting the coefficients for generating the remaining probabilities.

### Output
Print a single line containing one integer — the number equivalent to the expected number of buildings modulo $163577857$.

### Constraints
- $1 \le p_i \le h$ for each valid $i$
- $1 \le x, K \le h$
- $0 \le a_i \le 10^9$ for each valid $i$
- $0 \le c_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):**
- $1 \le N \le 1,000$
- $1 \le h \le 10,000$
- $1 \le K \le 10$

**Subtask #2 (10 points):**
- $1 \le N \le 50,000$
- $1 \le h \le 10^6$
- $1 \le K \le 10$

**Subtask #3 (30 points):**
- $1 \le N \le 100$
- $1 \le h \le 10^9$
- $1 \le K \le 100$

**Subtask #4 (55 points):**
- $1 \le N \le 2,000$
- $1 \le h \le 10^9$
- $1 \le K \le 100$

### Example Input
```
3
5
3
2
1 3 5
1 1
1 1
```

### Example Output
```
13631490
```

### Explanation
The complete sequence $a$ is equal to $\{1, 1, 2, 3, 5\}$ and $s = \sum a_i = 1+1+2+3+5 = 12$. Chef looks at the range starting with unit $1$ with probability $a_1 / s = 1/12$, at the range starting with unit $3$ with probability $a_3 / s = 1/6$, and so on. The expected number of buildings he shoots is therefore equal to $\frac{1}{12}\cdot2 + \frac{1}{12}\cdot1 + \frac{2}{12}\cdot2 + \frac{3}{12}\cdot2 + \frac{5}{12}\cdot2 = \frac{23}{12} = 23\cdot12^{-1} = 13631490$.

### Example Input
```
3
5
3
2
1 3 1
1 1
1 1
```

### Example Output
```
27262978
```

### Explanation
Again, $a = \{1, 1, 2, 3, 5\}$, $s = 1+1+2+3+5 = 12$, so the probabilities are the same as in the previous example. However, there are two buildings in unit $1$. The expected value $ = \frac{1}{12}\cdot3 + \frac{1}{12}\cdot1 + \frac{2}{12}\cdot1 + \frac{3}{12}\cdot2 + \frac{5}{12}\cdot2 = \frac{22}{12} = 11\cdot6^{-1} = 27262978$.
