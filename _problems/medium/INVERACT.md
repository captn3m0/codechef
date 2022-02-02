---
{"category_name":"medium","problem_code":"INVERACT","problem_name":"An Inveractive Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/vkBWwL4-EfU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"5-10-2020","tags":{"0":"binary","1":"cook123","2":"interactive","3":"medium","4":"psychik","5":"sjshohag","6":"sjshohag"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/INVERACT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVERACT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/INVERACT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/INVERACT.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/INVERACT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/INVERACT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/INVERACT.pdf) as well.

**This is an interactive problem.**

Sushi has a sequence of integers $A_1, A_2, \ldots, A_N$; each of them is between $1$ and $10^6$ inclusive. You do not know this sequence, but for a strange reason (maybe because you love her!), you have to find it.

You may ask up to $2,222$ queries. In each query:
- You should choose two integers $K$ and $X$ ($1 \le K \le N + 1$, $1 \le X \le 10^6$).
- Sushi creates a new sequence $B_1, B_2, \ldots, B_{N+1}$, where $B_K = X$ and if we deleted the element $B_K$ from this sequence, we would obtain the sequence $A$.
- Then, Sushi tells you the number of inversions in the sequence $B$, i.e. the number of pairs $(i, j)$ such that $1 \le i \lt j \le N + 1$ and $B_i \gt B_j$.

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing a single integer $N$.
- To ask a query, you should print a line containing the character '?', followed by a space and two space-separated integers $K$ and $X$ describing your query. Then, you must read a line containing a single integer ― the answer to the query.
- When you have guessed the sequence, print a single line containing the character '!', followed by a space and $N$ space-separated integers $A_1, A_2, \ldots, A_N$ ($1 \le A_i \le 10^6$ for each valid $i$). This does not count as a query.

If you ask more than $2,222$ queries or do not follow the interaction format, you may receive any verdict.

**Do not forget to flush the output after printing each line!**

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 100$

### Example Input
```
You             Sushi
                2
                2
? 1 1
                1
? 2 4
                2
? 2 2
                3
? 3 4
                1
! 3 1
                1
? 1 5
                1
? 1 4
                0
! 4
```

### Explanation
**Example case 1:** The sequence Sushi has is $A = [3, 1]$. Your interaction with Sushi is as follows:
- `? 1 1`: Sushi creates the sequence $B = [1, 3, 1]$ and returns the number of inversions in it, which is $1$.
- `? 2 4`: Sushi creates the sequence $B = [3, 4, 1]$ and returns the number of inversions in it, which is $2$.
- `? 2 2`: Sushi creates the sequence $B = [3, 2, 1]$ and returns the number of inversions in it, which is $3$.
- `? 3 4`: Sushi creates the sequence $B = [3, 1, 4]$ and returns the number of inversions in it, which is $1$.
- `! 3 1`: You have guessed the sequence to be $[3, 1]$, which is correct.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>