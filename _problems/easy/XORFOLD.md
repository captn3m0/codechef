---
{"category_name":"easy","problem_code":"XORFOLD","problem_name":"XOR Folding","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/OCwgyungNhc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"8-06-2021","tags":{"0":"cakewalk","1":"cook130","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/XORFOLD","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORFOLD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/XORFOLD.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/XORFOLD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/XORFOLD.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/XORFOLD.pdf) as well.

You are given a grid with size $N \times M$. Each cell of this grid contains either $0$ or $1$.

We should perform the following operation until the size of the grid becomes $1 \times 1$:
- Suppose the present size of the grid is $x \times y$.
- Choose one of the $x-1$ horizontal lines or $y-1$ vertical lines crossing the grid.
- Fold the grid along this line. For each pair of cells which overlap after this folding, replace them by a single cell such that the value in this cell is the XOR of the values in the two overlapping cells. Thus, we obtain a new grid.

**Example:** If the initial grid is
```
000
111
010
```

1) After folding along $1$-st horizontal line, the grid is
```
111
010
```

2) After folding along the $2$-nd vertical line, the grid is
```
10
01
```

3) After folding along the $1$-st horizontal line, the grid is
```
11
```

4) After folding along the $1$-st vertical line, the grid is
```
0
```

Determine whether there is a sequence of folds such that in the final $1 \times 1$ grid, the only cell contains $1$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single binary string $S_i$ with length $M$ describing the $i$-th row of the grid.

### Output
Print a single line containing the string `"YES"` if it is possible to obtain $1$ in the final $1 \times 1$ grid or `"NO"` if it is impossible (without quotes).

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 2 \cdot 10^4$
- $1 \leq N \cdot M \leq 10^5$
- each character of each string is '0' or '1'
- the sum of $N \cdot M$ over all test cases does not exceed $10^6$

### Example Input
```
2
1 2
01
3 3
000
111
010
```

### Example Output
```
YES
NO
```

### Explanation
**Example case 1:** There is only $1$ possible move, which is to fold along the only vertical line. The resulting grid contains only $1$.

**Example case 2:** There is no sequence of moves which would result in a $1 \times 1$ grid containing only $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>