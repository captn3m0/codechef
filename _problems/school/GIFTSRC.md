---
{"category_name":"school","problem_code":"GIFTSRC","problem_name":"Find Your Gift","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5\r\nLLLUR\r\n7\r\nLLLRUUD\r\n8\r\nLRULLUDU","output":"0 1\r\n-1 1\r\n-2 2","explanation":"**Example case 1:** Chef\u0027s path is $(0,0) \\rightarrow (-1,0) \\rightarrow (-1,0) \\rightarrow (-1,0) \\rightarrow (-1,1) \\rightarrow (0,1)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"13-03-2020","tags":{"0":"imanik"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GIFTSRC","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GIFTSRC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/GIFTSRC.pdf),[Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/GIFTSRC.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/GIFTSRC.pdf) as well.

Today is Chef's birthday and he is looking forward to his gift. As usual, the gift is hidden and Chef has to follow a sequence of $N$ instructions to reach it.

Initially, Chef is standing in the cell $(0, 0)$ of a two-dimensional grid. The sequence of instructions is given as a string $S$. If we denote Chef's current cell by $(x, y)$, each character of $S$ corresponds to an instruction as follows:
- 'L' means to go left, i.e. to the cell $(x-1, y)$
- 'R' means to go right, i.e. to the cell $(x+1, y)$
- 'U' means to go up, i.e. to the cell $(x, y+1)$
- 'D' means to go down, i.e. to the cell $(x, y-1)$

In addition, Chef should never perform multiple consecutive moves along the same axis of the grid. If there are multiple consecutive instructions to move along the same axis (left/right or up/down), he should perform only the first of these moves.

Find the cell $(x_g, y_g)$ which contains the hidden gift.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing two space-separated integers $x_g$ and $y_g$.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 1,000$
- $S$ contains only characters 'L', 'R', 'U' and 'D'

### Example Input
```
3
5
LLLUR
7
LLLRUUD
8
LRULLUDU
```

### Example Output
```
0 1
-1 1
-2 2
```

### Explanation
**Example case 1:** Chef's path is $(0,0) \rightarrow (-1,0) \rightarrow (-1,0) \rightarrow (-1,0) \rightarrow (-1,1) \rightarrow (0,1)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>