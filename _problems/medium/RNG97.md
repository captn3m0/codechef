---
{"category_name":"medium","problem_code":"RNG97","problem_name":"Random Number Generator","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"24-10-2019","tags":{"0":"expected","1":"jafarbadour","2":"jafarbadour","3":"ltime77","4":"probability"},"problem_difficulty_level":"Medium","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/RNG97","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RNG97","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/RNG97.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/RNG97.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/RNG97.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/RNG97.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/RNG97.pdf) as well.

Almir has a multiset $S = \{s_1, s_2, \ldots, s_N\}$; recall that a multiset may contain duplicate elements. At the time $t = 0$, Almir starts his random number generator and feeds his multiset to it. During each subsequent second, the random number generator would transform the multiset in the following manner:
- for each valid $t$, let $S_{t-1}$ be the multiset at the beginning of the $t$-th second ($S_0 = S$)
- for each element $x \in S_{t-1}$, during the $t$-th second, $x$ is transformed into $x^{random(1, K)} \, \% \, M$, where $random(1, K)$ denotes a uniformly randomly generated integer between $1$ and $K$ inclusive
- at the end of the $t$-th second, $S_t$ is the multiset of these transformed elements

In addition, Almir can insert elements into the multiset at the end of some seconds (i.e. immediately after some transformation has finished). You should answer $Q$ queries of two types:
- `1 t x`: find the expected number of elements of the multiset at the end of the $t$-th second (the multiset $S_t$) that are equal to $x$
- `2 t x`: insert a new element $x$ into the multiset at the end of the $t$-th second (the multiset $S_t$)

Note that the queries are given in chronological order and there are no overlaps between any queries or transformations.

Your task is to find the answers to all queries of the first type. It can be shown that in each of these queries, the expected value can be expressed as an irreducible fraction $\frac{P}{Q}$, where $P$ and $Q$ are non-negative integers and $Q$ is coprime to $10^9+7$. You should find $P \cdot Q^{-1}$ modulo $10^9+7$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $10^9+7$.

### Input
- The first line of the input contains four space-separated integers $N$, $Q$, $K$ and $M$.
- The second line contains $N$ space-separated integers $s_1, s_2, \ldots, s_N$.
- The following $Q$ lines describe queries. For each valid $i$, the $i$-th of these lines contains three space-separated numbers $type_i$, $t_i$ and $x_i$ describing the $i$-th query.

### Output
For each query of the first type, print a single line containing one integer $P \cdot Q^{-1} \, \% \, (10^9+7)$.

### Constraints 
- $1 \le N \le 10^5$
- $1 \le Q \le 10^6$
- $1 \le K \le 10^9$
- $1 \le M \le 100$
- $M$ is a prime
- $1 \le t_1 \lt t_2 \lt \ldots \lt t_Q \le 10^6$
- $1 \le s_i \lt M$ for each valid $i$
- $type_i \in \{1, 2\}$ for each valid $i$
- $1 \le x_i \lt M$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):** $1 \le Q \le 1000$
 
**Subtask #2 (35 points):** the only query of the first type is the last query
 
**Subtask #3 (50 points):** original constraints

### Example Input 1
```
4 6 10 5
1 2 3 4
2 10 1
2 15 2
2 17 4
2 20 2
2 30 3
1 40 4
```

### Example Output 1
```
645425103
```

### Example Input 2
```
4 6 10 5
1 2 3 4
2 10 1
1 15 2
2 17 4
1 20 2
2 30 3
1 40 4
```

### Example Output 2
```
970977790
467843059
655757002
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>