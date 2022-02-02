---
{"category_name":"easy","problem_code":"CALPOWER","problem_name":"Cool Name","problemComponents":{"constraints":"- $1 \\leq T \\leq 60$\n- $1 \\leq |S_{i}| \\leq 100$ \n- $S_i$ consists of lowercase english alphabets only.","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"- The first line of input contains an integer $T$, denoting the total number of Sardar Singh\u0027s men.\n- Each of the next $T$ lines contains a single string $S_{i}$, the name of Sardar Singh\u0027s $i$-th man.\n","inputFormatState":true,"outputFormat":"- Output $T$ lines, each containing a single integer. The $i$-th of these lines should have the power of the $i$-th of Sardar Singh\u0027s men.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"1\nfaizal","output":273,"explanation":"The rearrangement with maximum power is $aafilz$. Its power can be calculated as\n$$\n1\\cdot ord(\u0027a\u0027) + 2\\cdot ord(\u0027a\u0027) + 3\\cdot ord(\u0027f\u0027) + 4\\cdot ord(\u0027i\u0027) + 5\\cdot ord(\u0027l\u0027) + 6\\cdot ord(\u0027z\u0027)\n$$\nwhich equals $273$.\nIt can be verified that no rearrangement gives a larger power.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ROwQjMJZA74","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"anshg0711","problem_tester":"","date_added":"30-09-2021","tags":{"0":"anshg0711","1":"csns2021","2":"simple","3":"sorting"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CALPOWER","time":{"view_start_date":1635960600,"submit_start_date":1635960600,"visible_start_date":1635960600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CALPOWER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Sardar Singh has many men to fight against Ramadhir. He has a unique way to calculate the power of each man by using their name. The name of every man fighting for him is a string containing of lowercase English alphabets, with $N$. Sardar Singh swaps any two characters in the name of a man, any number of times and calculates the power of each new name formed. Among all the names formed this way, the maximum power of any name is considered to be the power of that man.

- Sardar Singh defines the power  of a string $S$ as ∑ $i$ * (position of $i_{th}$ letter of string $S$ in alphabets), for $i$ = 1 … length of $S$. That is, for every letter of $S$, he multiplies its position in $S$ with its position in english alphabets and sums them all. The position of alphabets will start form $1$, that is position of $a$, $b$,...$z$ will be $1$, $2$,...$26$ respectively.





<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>