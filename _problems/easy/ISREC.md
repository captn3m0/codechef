---
{"category_name":"easy","problem_code":"ISREC","problem_name":"Rectangle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"27-12-2020","tags":{"0":"ccrc2021","1":"daanish_adm","2":"easy","3":"observation"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ISREC","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ISREC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/CCRC2021/hindi/ISREC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/CCRC2021/mandarin/ISREC.pdf), [Vietnamese](https://www.codechef.com/download/translated/CCRC2021/vietnamese/ISREC.pdf), and [Bengali](https://www.codechef.com/download/translated/CCRC2021/bengali/ISREC.pdf) as well.

You are given a grid with $N$ rows and $M$ columns, where each cell contains either '0' or '1'. 

Find out whether all the cells containing '1'-s form a rectangle, I.e, is there a rectangular contiguous subgrid such that every cell within it is a '1', and all the cells containing '1'-s are within this subgrid.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string with length $M$ describing the $i$-th row of the grid.

### Output
For each test case, print a single line containing the string `"YES"` if the connected component of '1'-s is a rectangle or `"NO"` if it is not.

**Note:** The output is case-insensitive ― each letter may be printed in upper case or lower case.

### Constraints 
- $1 \le T \le 1000$
- $1 \leq N, M \leq 500$
- Sum of $N*M$ over all tests is atmost $1.5*10^6$
- Each string contains only characters '0' and '1'
- It is guaranteed that grid contains at least a single '1'

### Example Input
```
3
3 3
010
111
010
4 4
0000
0110
1110
1100
3 3
011
011
000
```

### Example Output
```
NO
NO
YES
```

### Explanation
**Example case 1:** The minimal rectangle which covers all '1'-s also covers $4$ cells which contain '0'-s.

**Example case 2:** The minimal rectangle which covers all '1'-s also covers $2$ cells which contain '0'-s.

**Example case 3:** We can form a minimal rectangle with side length $2$ which covers all cells containing '1'-s and none of the cells containing '0'-s.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>