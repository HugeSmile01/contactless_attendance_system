import 'package:flutter/material.dart';
import 'package:firebase_core/firebase_core.dart';

import 'welcome_page.dart';

void main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'ScanTrack',
      theme: ThemeData(
        primaryColor: Color(0xFF61dafb),
        accentColor: Color(0xFF20232a),
        backgroundColor: Color(0xFF282c34),
      ),
      home: WelcomePage(),
    );
  }
}
