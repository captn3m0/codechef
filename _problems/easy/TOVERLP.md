---
{"category_name":"easy","problem_code":"TOVERLP","problem_name":"Total Overlap","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"6-01-2021","tags":{"0":"ccrc2021","1":"coordinate","2":"daanish_adm","3":"difference","4":"easy"},"problem_difficulty_level":"Easy-Medium","best_tag":"Coordinate Compression","editorial_url":"https://discuss.codechef.com/problems/TOVERLP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOVERLP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/TOVERLP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/TOVERLP.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/TOVERLP.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/TOVERLP.pdf) as well.

You are given two sets of segments on a line, $A$ and $B$. Set $A$ contains $N$ segments (numbered $1$ through $N$); for each valid $i$, the $i$-th of these segments is $S_{A,i} = [L_{A,i}, R_{A,i}]$. Set $B$ contains $M$ segments (numbered $1$ through $M$); for each valid $i$, the $i$-th of these segments is $S_{B,i} = [L_{B,i}, R_{B,i}]$. 

Find $\sum_{i=1}^N \sum_{j=1}^M |S_{A,i} \cap S_{B,j}|$, where $|S_{A,i} \cap S_{B,j}|$ denotes the length of the intersection of the $i$-th segment from set $A$ and the $j$-th segment from set $B$. Note that the length of a segment $[l, r]$ is $r-l$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_{A,i}$ and $R_{A,i}$.
- $M$ more lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_{B,i}$ and $R_{B,i}$.

### Output
For each test case, print a single line containing one integer ― the value of the sum.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N, M \leq 10^5$
- $1 \leq L_{A,i} \lt R_{A,i} \leq 10^8$ for each valid $i$
- $1 \leq L_{B,i} \lt R_{B,i} \leq 10^8$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
3
2 2
1 2
3 4
1 3
2 4
1 1
1 2
3 4
2 1
5 6
6 8
5 8
```

### Example Output
```
2
0
3
```

### Explanation
**Example case 1:** The intersection of $S_{A,1}$ and $S_{B,1}$ is the segment $[1, 2]$. The intersection of $S_{A,2}$ and $S_{B,2}$ is $[3, 4]$. Both remaining intersections have lengths $0$, so the sum is $1 + 1 = 2$.

**Example case 2:** The only two segments have an empty intersection, which has length $0$.

**Example case 3:** The segment $[5, 8]$ is covered by both sets of segments, so the sum is $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>