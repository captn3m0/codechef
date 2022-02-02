---
{"category_name":"easy","problem_code":"CAB","problem_name":"Cybalphabit","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackcyborg","problem_tester":"","date_added":"18-12-2020","tags":{"0":"bytr2020","1":"hackcyborg","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CAB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In the new world, we also have a new system called Cybalphabit system.
The system assigns points to each Latin lowercase alphabet as follows:-
'a' is assigned $2^0$ , 'b' is assigned $2^1$, 'c' $2^2$ and so on. Thus, finally 'z' is assigned $2^{25}$ points.

A Cyberstring is a sequence of lowercase Latin alphabets.

Now, the total score of a Cyberstring will be the sum of points of its characters.
You will be given two integers $N$ and $K$. 
Construct a Cyberstring $X$ of length $N$ with total score $K$ or print $-1$ if it is not possible to form the Cyberstring ($X$). 
If there are multiple answers, print any.

###INPUT:

- First line contains $T$, the number of test cases.
- Each of the next $T$ lines denotes a different test case :
- The ${(i+1)}^{th}$ line denotes the $i^{th}$ test case, and contains two integers $N$ and $K$, the length of the string that is to be constructed, and the score of the string respectively. 

###OUTPUT:

- For each test case, provide the output on a different line.
- Output the required string $X$, if one exists, otherwise output $-1$.

###Constraints:-

- $1 \leq T \leq 10^5$
- $1 \leq n \leq 10^5$
- $1  \leq k  \leq 5*10^7$

The sum of $n$ over all test cases is less than $10^{5}$

###Sample Input:
```
4
2 2
2 5
4 5
3 2
```

###Expected Output:
```
aa
ac
baaa
-1
```

###Explanation:

In the first test case, $n=2$ and $k=2$. So,we have to construct a string of length $2$ with total score $2$. It can be easily seen that the only possible string is "aa". Its total score will be equal to $2^0 + 2^0 = 2$.
 
In the second case, "ac" will have score $2^0 + 2^2 = 5$. Obviously, "ca" will also have the same score and is also a possible answer.

In the fourth test case, it can be shown that there is no possible string which satisfies the conditions. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>