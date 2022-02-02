---
{"category_name":"easy","problem_code":"HACKFU","problem_name":"Hack Fulu","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"13-08-2018","tags":{"0":"allllekssssa","1":"constructive","2":"cook","3":"cook97","4":"greedy","5":"median","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/HACKFU","time":{"view_start_date":1534703400,"submit_start_date":1534703400,"visible_start_date":1534703400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a <a href="http://www.codechef.com/download/translated/COOK97/mandarin/HACKFU.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/COOK97/russian/HACKFU.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK97/vietnamese/HACKFU.pdf" target="_blank">Vietnamese</a> as well.</h3>

The *median* of a sequence is the element in the middle of the sequence after it is sorted. For a sequence with even size, the median is the average of the two middle elements of the sequence after sorting. For example, for a sequence $A = [1, 3, 3, 5, 4, 7, 11]$, the median is equal to $4$, and for $A = [2, 3, 4, 5]$, the median is equal to $(3+4)/2 = 3.5$.

Fulu is a famous programmer in his country. He wrote the following program (given in pseudocode) for finding the median in a sequence $A$ with length $N$:
```
read(N)
read(A[0], A[1], ..., A[N-1])
sort(A)
# simultaneously remove elements A[K] and A[N mod K] from the array A
# the order of the remaining N-2 elements is unchanged
remove(A[K], A[N mod K])
return A[(N-2)/2] # integer division
```

The program takes an integer $K$ as a parameter. Fulu can choose this integer arbitrarily between $1$ and $N-1$ inclusive.

Little Lima, Fulu's friend, thinks Fulu's program is wrong (as always). As finding one counterexample would be an easy task for Lima (he has already found the sequence $A = [34, 23, 35, 514]$, which is a counterexample for any $K \le 3$), Lima decided to make hacking more interesting. Fulu should give him four parameters $S, K, m, M$ (in addition to $N$) and Lima should find the lexicographically smallest *proper* sequence $A$ with length $N$ as a counterexample.

We say that a sequence $A$ with length $N$ ($0$-indexed) is *proper* if it satisfies the following conditions:
- it contains only positive integers
- $A_0 + A_1 +A_2 + \dots + A_{N-1} = S$
- $m \le A_i \le M$ for each $0 \le i \lt N$
- the number returned by Fulu's program, ran with the given parameter $K$, is different from the correct median of the sequence $A$

Can you help Lima find the lexicographically smallest counterexample or determine that Fulu's program works perfectly for the given parameters?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $N$, $S$, $K$, $m$ and $M$.

### Output
For each test case, if there is no proper sequence, print a single line containing the integer $-1$; otherwise, print a single line containing $N$ space-separated integers — the lexicographically smallest proper sequence.

### Constraints
- $1 \le T \le 8$
- $3 \le N \le 10^5$
- $1 \le K \le N-1$
- $1 \le S \le 10^9$
- $1 \le m \le M \le S$

### Example Input
```
2
3 6 1 1 5
4 4 2 1 3
```

### Example Output
```
1 1 4
-1
```

### Explanation
**Example case 1:** For the sequence $A = [1, 1, 4]$, it is already sorted, so the program would just remove the first two elements ($K=1$, $N\%K=0$) and return the only remaining element $4$. Obviously, the median of the original sequence is $1$. It can be shown that there is no lexicographically smaller proper sequence.

**Example case 2:** The only possible sequence is $A = [1, 1, 1, 1]$, which is not proper, since Fulu's program will give the correct answer $1$ for it.
