---
{"category_name":"medium","problem_code":"SUBMAXA","problem_name":"Sweetest Candy ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n1 2 3 4","output":"10 13 15 16","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"teja349","problem_tester":null,"date_added":"8-02-2020","tags":{"0":"akashbhalotia","1":"cook115","2":"cyclic","3":"difference","4":"expected","5":"medium","6":"next","7":"prefix","8":"rotation","9":"teja349"},"problem_difficulty_level":"Medium","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/SUBMAXA","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBMAXA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/SUBMAXA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/SUBMAXA.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/SUBMAXA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/SUBMAXA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/SUBMAXA.pdf) as well.

Chef wants to buy candy for his friend. He went to a store which sells candies from $N$ jars, arranged in a circle and numbered $1$ through $N$ in such a way that for each valid $i$, jars $i$ and $i+1$ are adjacent, and jars $1$ and $N$ are also adjacent. For each valid $i$, the candies in the $i$-th jar have a sweetness $A_i$.

Obviously, Chef wants to buy the sweetest candies. However, he gets attracted by a limited-time offer in the store and wants to use it. The offer is as follows: Chef has to choose an integer $k$ ($1 \le k \le N$), then choose $k$ jars which are contiguous in the circle, and finally, he can buy the candies from these jars at a discounted price. For a fixed $k$, Chef chooses the $k$ contiguous jars uniformly randomly (among all possible sets of $k$ contiguous jars), but once he chooses them, he buys only candies with the largest sweetness among the chosen jars.

As you may have guessed, Chef is confused about which value of $k$ to choose. For each valid $k$, let's denote the expected value of the sweetness of the candies he will buy if he chooses this value of $k$ by $S_k$. Then, let's denote $F_k = S_k \cdot N$; it can be proved that for each valid $k$, $F_k$ is an integer. Can you help Chef find the values of $F_1, F_2, \ldots, F_N$?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $F_1, F_2, \ldots, F_N$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^6$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
4
1 2 3 4

```

### Example Output
```
10 13 15 16
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>