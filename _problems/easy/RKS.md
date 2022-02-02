---
{"category_name":"easy","problem_code":"RKS","problem_name":"Rooks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"watcher","problem_tester":null,"date_added":"21-01-2019","tags":{"0":"ad","1":"ltime68","2":"watcher"},"editorial_url":"https://discuss.codechef.com/problems/RKS","time":{"view_start_date":1548522002,"submit_start_date":1548522002,"visible_start_date":1548522002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME68/mandarin/RKS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME68/bengali/RKS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME68/hindi/RKS.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME68/russian/RKS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME68/vietnamese/RKS.pdf) as well.

Arya has a chessboard with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$); a square in row $r$ and column $c$ is denoted by $(r, c)$.

Arya has already placed $K$ rooks on the chessboard in such a way that no two rooks attack each other. Note that two rooks attack each other if they are in the same row or in the same column and there is no rook between them. She is busy learning how to tame a dragon right now, so she asked you to place as many other rooks as possible on the chessboard in such a way that afterwards, no two rooks on the chessboard attack each other. Help Arya and choose the positions of these rooks.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- Each of the next $K$ lines contains two space-separated integers $r$ and $c$ denoting that Arya placed a rook on the square $(r, c)$.

### Output
For each test case:
- Let's assume that you placed $P$ rooks on squares $(r_1, c_1), (r_2, c_2), \ldots, (r_P, c_P)$.
- You should print a single line containing $2P+1$ space-separated integers $P, r_1, c_1, \ldots, r_P, c_P$.
- $P$ must be maximum possible.
- If there are multiple possible answers, the sequence $r_1, c_1, \ldots, r_P, c_P$ should be lexicographically smallest.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^6$
- $0 \le K \le N$
- $1 \le r_i, c_i \le N$ for each valid $i$
- no two initially placed rooks attack each other
- the positions of all initially placed rooks are pairwise distinct
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):**
- $T = 10$
- $N \le 8$

**Subtask #2 (20 points):**
- $T = 10$
- $N \le 1,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
4 2
1 4
2 2
4 0
```

### Example Output
```
2 3 1 4 3
4 1 1 2 2 3 3 4 4
```
