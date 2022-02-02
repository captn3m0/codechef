---
{"category_name":"school","problem_code":"CATHIEF","problem_name":"Catch the Thief","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n0 1 1 1\r\n1 4 1 5\r\n4 2 1 7\r\n3 7 2 10\r\n8 2 3 15","output":"No\r\nNo\r\nYes\r\nYes\r\nYes","explanation":"**Example case 1:** The policeman is at $0$ and the thief is at $1$. After the $1$-st second, the policeman is at $1$ and the thief is at $0$. After the next second, the policeman is again at $0$ and the thief at $1$. They cannot end up at the same coordinate.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/a7spaga8hZo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_25dec","problem_tester":"","date_added":"14-12-2020","tags":{"0":"cakewalk","1":"cook125","2":"rajarshi_basu","3":"utkarsh_25dec"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CATHIEF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CATHIEF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/CATHIEF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/CATHIEF.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/CATHIEF.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/CATHIEF.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/CATHIEF.pdf) as well.

A policeman wants to catch a thief. Both the policeman and the thief can only move on a line on integer coordinates between $0$ and $N$ (inclusive).

Initially, the policeman is at a coordinate $x$ and the thief is at a coordinate $y$. During each second, each of them must move to the left or right (not necessarily both in the same direction) by distance $\textbf{exactly}$ equal to $K$. No one may go to the left of the coordinate $0$ or to the right of $N$. Both the policeman and the thief move simultaneously and they cannot meet while moving, only at the end of each second.

Will the policeman be able to catch the thief if they both move optimally? The thief is caught as soon as the policeman and thief meet at the same position at the same time.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $x$, $y$, $K$ and $N$.

### Output
For each test case, print a single line containing the string `"Yes"` if the thief can be caught or `"No"` if the thief cannot be caught (without quotes).

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^9$
- $1 \le K \le N$
- $0 \le x, y \le N$
- $x \neq y$

### Example Input
```
5
0 1 1 1
1 4 1 5
4 2 1 7
3 7 2 10
8 2 3 15
```

### Example Output
```
No
No
Yes
Yes
Yes
```

### Explanation
**Example case 1:** The policeman is at $0$ and the thief is at $1$. After the $1$-st second, the policeman is at $1$ and the thief is at $0$. After the next second, the policeman is again at $0$ and the thief at $1$. They cannot end up at the same coordinate.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>