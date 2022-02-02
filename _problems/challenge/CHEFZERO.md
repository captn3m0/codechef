---
{"category_name":"challenge","problem_code":"CHEFZERO","problem_name":"Chef and Condition Zero (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"24-08-2018","tags":{"0":2,"1":"challenge","2":"expectation","3":"mgch","4":"partition","5":"sept18","6":"simulation"},"editorial_url":"https://discuss.codechef.com/problems/CHEFZERO","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/CHEFZERO.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/CHEFZERO.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/CHEFZERO.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/CHEFZERO.pdf) as well.


ShareChat is a country where Chef lives. The country may be represented by a $N \times M$ grid; let's denote the cell in row $i$ and column $j$ ($1 \le i \le N$, $1 \le j \le M$) by $(i, j)$. Each cell of this grid is a city; let's denote the population (number of residents) of the city in cell $(i, j)$ by $A_{i, j}$. Two cities are *neighbouring* if their cells have a common side.

Chef wants to divide this country into $K$ districts. Each district should be connected, that is, within each district, it should be possible to reach any city from any other city by only moving between neighbouring cities within this district.

Since there could be many ways to create the districts, Chef wants to minimise the absolute difference between the maximum and minimum of total populations of the resulting districts. Help him solve this difficult problem!

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $K$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \dots, A_{i, M}$.

### Output
Print $N$ lines. For each valid $i$, the $i$-th of these lines should contain $M$ space-separated integers $B_{i, 1}, B_{i, 2}, \dots, B_{i, M}$, where $B_{i, j}$ denotes the district which the city in cell $(i, j)$ belongs to. Each district must be connected and $1 \le B_{i, j} \le K$ must hold for each valid $i, j$.

### Constraints 
- $1 \le N, M, K \le 1,000$
- $1 \le A_{i, j} \le 10^9$ for each valid $i, j$

### Example Input
```
3 3 2
1 10 3
2 5 3
3 1 1
```

### Example Output
```
1 2 1
1 2 1
1 1 1
```

### Explanation
**Example case 1:** There are 2 districts. The population in the first district equals $1+2+3+1+1+3+3 = 14$, the population in the second district equals $10+5 = 15$.

### Scoring
The score for each test case (and therefore each test file) is $(MaxPopulation - MinPopulation) \cdot 10^9 / SumOfPopulations$, where $MaxPopulation$ is the maximum population over all districts, $MinPopulation$ is the minimum population over all districts and $SumOfPopulations$ is the sum of populations of all cities. The score of a submission is the sum of its scores for all test files. For the example output, the score would be $1 \cdot 10^9 / 29 \doteq 34482758.62069$.

If your solution does not satisfy the constraints listed in the section Output, its verdict will be Wrong Answer.

### Test Generation Process
There are twenty test cases. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files.

The pseudocode used for generating tests is given below. Assume that the function `rand(l, r)` generates a uniformly random number between $l$ and $r$ (both inclusive).

```
MAXA := 1000000000
N := rand(500, 1000)
M := rand(500, 1000)
K := rand(500, 1000)
for i in 1..N:
	for j in 1..M:
		A[i][j] := rand(1, MAXA)
```
