---
{"category_name":"medium","problem_code":"BINPALIN","problem_name":"Binary Palindrome","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":null,"date_added":"8-12-2019","tags":{"0":"medium","1":"sidhant007","2":"string"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINPALIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are writing in your favourite editor starting with a blank editor. In each operation you can either type a binary digit (i.e a $0$ or $1$) or type backspace which removes the rightmost typed character on the screen. 

After every operation you are required to print the length of the longest palindromic substring that is present on the screen.

There are $N$ operations of two types - 
- 1 $d$: Type the character $d$ on the editor, where $d \in \{0, 1\}$

- 2: Backspace, i.e remove the rightmost typed character on the screen

It is guaranteed that when a Type 2 operation is made, the screen will have at least 1 character.

### Input
- The first line contains a single integer $N$.
- The next line $N$ lines contains all the $N$ queries in the format as described above

### Output
After each query, output in a new line the length of the longest palindromic substring that is present currently on the screen.

### Note
The I/O in this problem is large. Please use fast I/O methods.

### Constraints
- $1 \leq N \leq 10^6$

For all the queries - 
- $d \in \{0, 1\}$, for all queries of Type 1

### Example Input
```
8
1 0
1 0
1 1
1 0
2
1 0
2
1 1
```

### Example Output
```
1
2
2
3
2
3
2
2
```

### Explanation
After the first 4 operations, the editor looks like "0010", in which the longest palindromic substring has length 3.

After the 5th operation: Then the backspace makes it "001", in which the longest palindromic substring has length 2.

After the 6th operation: Append a "0" and make it "0010" again, in which the longest palindromic substring is of length 3.

After the 7th operation: Then the backspace makes it "001" again, in which the longest palindromic substring has length 2.

After the 8th operation: Append a "1" and make it '0011", in which the longest palindromic substring has length 2.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>