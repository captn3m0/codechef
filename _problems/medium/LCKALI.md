---
{"category_name":"medium","problem_code":"LCKALI","problem_name":"Lucky Ali","problemComponents":{"constraints":"- $1 \\leq N \\leq 5 \\cdot 10^{5}$\n- $1 \\leq D \\leq 5 \\cdot 10^{4}$\n- The length of numbers of Aryan and Ali does not exceed $10^3$ \n- $M$ consists of digits from $0$ to $9$.\n- $x$ is either Aryan or Ali.\n- $y$ can be any digit from $0$ to $9$.\n- During the erase operation, the corresponding person\u0027s number is non empty.\n- The numbers of Aryan, Ali and even the magical number $M$ can contain leading zeroes.","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- First line will contain two spaced integers $N$ , $D$\n- The next line will contain the magical number $M$ of length $N$\n- $D$ lines follow. Each of these lines will contain either of the following:\n   * $append$ $x$ $y$ : You have to append digit $y$ to the end of $x$\u0027s number.\n   * $erase$ $x$ : Erase the last digit from $x$\u0027s number. \n","inputFormatState":true,"outputFormat":"- Print $D$ lines. On the $i^{th}$ line, print \u0022YES\u0022 (without quotes) if both Aryan and Ali will be happy after the $i^{th}$ day otherwise print \u0022NO\u0022 (without quotes). You can print any character of the answer in any case, ie \u0022yes\u0022, \u0022YeS\u0022, \u0022nO\u0022,\u0022No\u0022 etc will be considered valid response. ","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4 4\n0013\nappend Aryan 1\nappend Ali 0\nappend Ali 3\nappend Aryan 9\n","output":"YES\nYES\nYES\nNO\n","explanation":"- At the end of first day, Aryan\u0027s number is $1$ , while Ali\u0027s number is empty. Since $1$ can be obtained as a subsequence of $M$, Aryan is happy. Ali is also happy(as his number is empty).\n\n- At the end of second day, numbers of Aryan and Ali are $1$ and $0$ respectively. Aryan can choose the subsequence formed by the digit at position $3$ while Ali can choose the digit at position $1$ . Since these are distinct positions , both will be happy.\n\n- At the end of third day, numbers of Aryan and Ali are $1$ and $03$ respectively. Aryan can choose the same position as before, while Ali can choose positions $1$ and $4$. As these are distinct positions, both will be happy.\n\n- At the end of forth day, numbers of Aryan and Ali are $19$ and $03$ respectively. Since Aryan cannot choose any subsequence , he will be unhappy (Ali still being happy).   \n ","isDeleted":false},"1":{"id":2,"input":"7 10\n9784831\nappend Aryan 9\nappend Ali 7\nappend Aryan 8\nappend Aryan 1\nappend Ali 8\nappend Ali 4\nappend Ali 4\nappend Ali 0\nerase Ali\nerase Ali\n","output":"YES\nYES\nYES\nYES\nYES\nYES\nNO\nNO\nNO\nYES\n","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"need_for_code","problem_tester":"","date_added":"10-10-2021","tags":{"0":"dynamic","1":"fzbz2021","2":"greedy","3":"medium","4":"need_for_code"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/LCKALI","time":{"view_start_date":1637951400,"submit_start_date":1637951400,"visible_start_date":1637951400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LCKALI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Abhishek is working in one of the best telecommunication companies of the world. He joined this company recently.To test his skills, his boss assigned him to help two of their customers: Aryan and Ali. 


Initially both of their phone numbers are empty (*fantasy world you see*). During each day , one of the following things can take place:
- Last digit of numbers of either Aryan or Ali can be erased.
- A new digit can be appended at the end of the numbers of either Aryan or Ali.


The company also has a magical number $M$ of length $N$, where each digit is numbered from $1$ to $N$. Aryan and Ali will be happy if both of their numbers appear as non-overlapping subsequences of $M$.



More formally, suppose that Aryan chooses some positions from $M$ such that the digits at those positions form his current number (in the same order).Let the positions be $a_{1},a_{2},a_{3},...,a_{p}$ . Now , Ali chooses some positions, not already chosen by Aryan such that the digits at those positions form his current number (in the same order).Let the positions be $b_{1},b_{2},b_{3},...,b_{q}$. Then the following conditions should hold true :

- For all valid pairs $(a_{i},b_{j})$ , $a_{i} \neq b_{j}$.
- All $a_{i}$ as well as $b_{i}$ are distinct.
- $M_{a_{1}}M_{a_{2}}M_{a_{3}}....M_{a_{p}}$ forms Aryan's number.
- $M_{b_{1}}M_{b_{2}}M_{b_{3}}....M_{b_{q}}$ forms Ali's number.


If it possible to achieve the above tasks ,both will be happy, otherwise they will be unhappy (obviously).
Abhishek has to help these customers over a period of $q$ days.As he is a new employee, he asks for your help.




<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>